
function uploadFileAttachment (attachment) {
  // uploadFile(attachment.file)
}

// function uploadFile (file) {
//   // const HOST = 'path to save teh file'
//   const key = createStorageKey(file)
//   const formData = createFormData(key, file)

//   console.log(formData)

//   // fetch(HOST, {
//   //   method: 'POST',
//   //   body: formData
//   // })
// }

// function createStorageKey (file) {
//   const date = new Date()
//   const day = date.toISOString().slice(0, 10)
//   const name = date.getTime() + '-' + file.name
//   return ['tmp', day, name].join('/')
// }

// function createFormData (key, file) {
//   const data = new FormData()
//   data.append('key', key)
//   data.append('Content-Type', file.type)
//   data.append('file', file)
//   return data
// }

window.addEventListener('trix-attachment-add', event => {
  console.log('attachment init event')
  console.log(event)
  if (!event.attachment.file) return
  uploadFileAttachment(event.attachment)
})
console.log('que pedo')

window.addEventListener('trix-attachment-remove', event => {
  console.log('Deleting file...')
  console.log(event.attachment.file)
})
