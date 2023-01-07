const HOSTURLS = {
  upload: 'http://localhost:8080/backend/modulos/blog/attachments',
  access: 'http://localhost:8080/uploads/website/posts/attachments/'
}

let fileName = ''
const token = document.querySelector('input[name="csrf"]').value

function uploadFileAttachment (attachment) {
  const setProgress = (progress) => attachment.setUploadProgress(progress)
  const setAttributes = (attributes) => attachment.setAttributes(attributes)

  uploadFile(attachment.file, setProgress, setAttributes)
}

function uploadFile (file, setProgressCallback, setSuccessCallback) {
  const formData = createFormData(file)

  fetch(HOSTURLS.upload, {
    method: 'POST',
    headers: {
      'X-CSRF-TOKEN': token, // CSRF Token
      'X-Requested-With': 'XMLHttpRequest'
    },
    body: formData,
    mode: 'same-origin', // no-cors, *cors, same-origin
    cache: 'no-cache', // *default, no-cache, reload, force-cache, only-if-cached
    credentials: 'same-origin' // include, *same-origin, omit
  }).then(response => {
    setProgressCallback(100)
    return response.json()
  }).then(obj => {
    fileName = obj.attachment

    const attributes = {
      url: `${HOSTURLS.access}${fileName}`,
      href: `${HOSTURLS.access}${fileName}?content-disposition=attachment`
    }
    setSuccessCallback(attributes)
  })
    .catch(err => console.log(err))
}

function createFormData (file) {
  const data = new FormData()
  data.append('Content-Type', file.type)
  data.append('attachment', file)
  return data
}

function deleteFile () {
  fetch(`${HOSTURLS.upload}/${fileName}`, {
    method: 'DELETE',
    headers: {
      'X-CSRF-TOKEN': token, // CSRF Token
      'X-Requested-With': 'XMLHttpRequest'
    },
    mode: 'same-origin', // no-cors, *cors, same-origin
    cache: 'no-cache', // *default, no-cache, reload, force-cache, only-if-cached
    credentials: 'same-origin' // include, *same-origin, omit
  })
    .then(response => console.log(response))
    .catch(err => console.log(err))
}

window.addEventListener('trix-attachment-add', event => {
  if (!event.attachment.file) return
  uploadFileAttachment(event.attachment)
})

window.addEventListener('trix-attachment-remove', event => {
  deleteFile()
})
