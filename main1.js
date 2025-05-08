var modal = document.getElementById("videoModal");
var closeModal = document.getElementById("closeModal");
document.addEventListener('DOMContentLoaded', function () {
    // Get the modal
    var modal = document.getElementById("videoModal");
  
    // Get the video trigger
    var videoTrigger = document.getElementById("videoTrigger");
  
    // Get the <span> element that closes the modal
    var closeModal = document.getElementById("closeModal");
  
    // When the user clicks on the video icon, open the modal
    videoTrigger.onclick = function(event) {
      event.preventDefault(); // Prevent default anchor action
      modal.style.display = "block";
    }
  
    // When the user clicks on <span> (x), close the modal
    closeModal.onclick = function() {
      modal.style.display = "none";
    }
  
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
   
      closeModal.onclick = function() {
        var video = modal.querySelector("video");
        video.pause();
        video.currentTime = 0; 
        modal.style.display = "none";
      }
      
  });
  