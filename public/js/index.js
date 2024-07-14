function triggerFileInput() {
  // Trigger the click event of the file input
  document.getElementById('fileInput').click();
}

function handleFileSelect() {
  // Handle the file selection here
  var selectedFile = document.getElementById('fileInput').files[0];
  console.log('Selected file:', selectedFile);

  var selectedFile = document.getElementById('fileInput').files[0];
  console.log('Selected file:', selectedFile);

  // Display the selected file name
  var displayElement = document.getElementById('selectedFileDisplay');
  displayElement.textContent = selectedFile ? 'Selected File: ' + selectedFile.name : 'No file selected';

  const uploadSection = document.getElementById('upload-section');
  uploadSection.style = 'display: none;';
}

