
function uploadFileAttachment (attachment) {
  const setProgress = (progress) => attachment.setUploadProgress(progress)

  uploadFile(attachment.file, setProgress)
}

function uploadFile (file, setProgressCallback) {
  const HOST = 'http://localhost:8080/backend/modulos/blog/attachments'
  const key = createStorageKey(file)
  const formData = createFormData(key, file)
  const token = document.querySelector('input[name="csrf"]').value

  fetch(HOST, {
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
  }).then(obj => console.log(obj))
    .catch(err => console.log(err))
}

function createStorageKey (file) {
  const date = new Date()
  const day = date.toISOString().slice(0, 10)
  const name = date.getTime() + '-' + file.name
  return ['tmp', day, name].join('/')
}

function createFormData (key, file) {
  const data = new FormData()
  data.append('key', key)
  data.append('Content-Type', file.type)
  data.append('attachment', file)
  return data
}

window.addEventListener('trix-attachment-add', event => {
  if (!event.attachment.file) return
  uploadFileAttachment(event.attachment)
})

window.addEventListener('trix-attachment-remove', event => {
  console.log('Deleting file...')
  console.log(event.attachment.file)
})
