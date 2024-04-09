<script>
  // Get the modal
  var modal = document.getElementById("editModal");

  // Get the <span> element that closes the modal
  var span = document.getElementsByClassName("close")[0];

  // Function to open the modal and position it at the top of the page
  function openEditModal() {
    modal.style.display = "block";
    modal.style.top = "0"; // Set the position of the modal to top
  }

  // When the user clicks on <span> (x), close the modal
  span.onclick = function() {
    modal.style.display = "none";
  }

  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  }
</script>
