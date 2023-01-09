const HOST = document.querySelector('input[name="host"]').value
const TOKEN = document.querySelector('input[name="csrf"]').value

/**
 * Evento que escucha al agregar un archivo adjunto en Trix.
 */
window.addEventListener('trix-attachment-add', event => {
  if (event.attachment.file) {
    uploadFileAttachment(event.attachment)
  }
})

/**
 * Evento que escucha al eliminar un archivo adjunto en Trix.
 */
window.addEventListener('trix-attachment-remove', event => {
  if (event.attachment.attachment) {
    deleteFileAttachment(event.attachment)
  }
})

/**
 * Almacena un archivo adjunto en el servidor desde Trix.
 */
function uploadFileAttachment (attachment) {
  const setProgress = progress => attachment.setUploadProgress(progress)
  const setAttributes = attributes => attachment.setAttributes(attributes)

  uploadFile(attachment.file, setProgress, setAttributes)
}

/**
 * Almacena un archivo adjunto en el servidor.
 */
function uploadFile (file, progressCallback, successCallback) {
  const formData = createFormData(file)

  fetch(HOST, {
    method: 'POST',
    headers: {
      'X-CSRF-TOKEN': TOKEN,
      'X-Requested-With': 'XMLHttpRequest'
    },
    body: formData,
    mode: 'same-origin',
    cache: 'no-cache',
    credentials: 'same-origin'
  })
    .then(res => {
      progressCallback(100)

      return res.json()
    })
    .then(json => {
      console.log(json)

      const attachment = json.attachment

      const attributes = {
        filename: attachment.filename,
        url: attachment.url,
        href: attachment.url + '?content-disposition=attachment'
      }

      successCallback(attributes)
    })
    .catch(err => console.error(err))
}

/**
 * Define el cuerpo de la petición.
 */
function createFormData (file) {
  const data = new FormData()

  data.append('Content-Type', file.type)
  data.append('attachment', file)

  return data
}

/**
 * Elimina un archivo adjunto en el servidor desde Trix.
 */
function deleteFileAttachment (file) {
  const endpoint = new URL(file.getAttribute('filename'), HOST + '/')

  fetch(endpoint, {
    method: 'DELETE',
    headers: {
      'X-CSRF-TOKEN': TOKEN,
      'X-Requested-With': 'XMLHttpRequest'
    },
    mode: 'same-origin',
    cache: 'no-cache',
    credentials: 'same-origin'
  })
    .then(res => res.json())
    .then(json => console.log(json))
    .catch(err => console.error(err))
}
