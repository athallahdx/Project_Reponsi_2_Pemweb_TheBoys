const bodyElement = document.getElementsByTagName('body')[0];
const assetsImg = bodyElement.getAttribute('data-assets-img');

// Set the background image
bodyElement.style.backgroundImage = `url('${assetsImg}The_Boys/DASHBOARD/home_background.png')`;

// Set additional background styles
bodyElement.style.backgroundRepeat = 'no-repeat';
bodyElement.style.backgroundPosition = 'center top';

 // Get modal elements
 const editModal = document.getElementById('editModal');
 const editMissionId = document.getElementById('editMissionId');
 const editMissionTitle = document.getElementById('editMissionTitle');
 const editMissionDescription = document.getElementById('editMissionDescription');
 const editDateTime = document.getElementById('editDateTime');
 const editLocation = document.getElementById('editLocation');

 // Open modal and populate form with data
 document.querySelectorAll('.edit-btn').forEach(button => {
     button.addEventListener('click', () => {
         editMissionId.value = button.dataset.id;
         editMissionTitle.value = button.dataset.title;
         editMissionDescription.value = button.dataset.description;
         editDateTime.value = button.dataset.datetime;
         editLocation.value = button.dataset.location;

         editModal.classList.remove('hidden');
     });
 });

 // Close modal
 document.getElementById('cancelEditBtn').addEventListener('click', () => {
     editModal.classList.add('hidden');
 });

 // Optional: Close modal on outside click
 window.addEventListener('click', event => {
     if (event.target === editModal) {
         editModal.classList.add('hidden');
     }
 });

document.addEventListener("DOMContentLoaded", () => {
    const addMissionBtn = document.getElementById("addMissionBtn");  // Make sure this button exists
    const modal = document.getElementById("modal");
    const missionForm = document.getElementById("missionForm");
    const modalTitle = document.getElementById("modalTitle");
    const missionTitleInput = document.getElementById("missionTitle");  // Corrected id to match HTML
    const missionDescriptionInput = document.getElementById("missionDescription");  // Corrected id to match HTML
    const dateTimeInput = document.getElementById("dateTime");  // Corrected id to match HTML
    const locationInput = document.getElementById("location");  // Corrected id to match HTML
    const cancelBtn = document.getElementById("cancelBtn");

    // Open modal when the button is clicked
    const openModal = (title) => {
        modalTitle.textContent = title;
        missionTitleInput.value = "";
        missionDescriptionInput.value = "";
        dateTimeInput.value = "";
        locationInput.value = "";
        modal.classList.remove("hidden");
    };

    // Close modal when the cancel button is clicked
    const closeModal = () => {
        modal.classList.add("hidden");
    };

    // Event listener for the "Add Mission" button (make sure this button exists)
    if (addMissionBtn) {
        addMissionBtn.addEventListener("click", () => {
            openModal("Add Mission");
        });
    }

    // Event listener for the cancel button to close the modal
    if (cancelBtn) {
        cancelBtn.addEventListener("click", () => {
            closeModal();
        });
    }

    // Prevent form from submitting and handle form submission if needed
    missionForm.addEventListener("submit", (e) => {
        // You can add form submission logic here (e.g., using AJAX)
        console.log("Form submitted!");
        // After submission, close the modal
        closeModal();
    });
});
