document.addEventListener("DOMContentLoaded", () => {
    const addMissionBtn = document.getElementById("addMissionBtn");
    const modal = document.getElementById("modal");
    const missionForm = document.getElementById("missionForm");
    const missionTableBody = document.querySelector("#missionTable tbody");
    const modalTitle = document.getElementById("modalTitle");
    const missionNameInput = document.getElementById("missionName");
    const missionLocationInput = document.getElementById("missionLocation");
    const cancelBtn = document.getElementById("cancelBtn");

    let editIndex = null;

    // Dummy data
    const missions = [
        { name: "Pembantaian ISIS", location: "Afghanistan" },
        { name: "Pencarian The Boys", location: "New York" },
        // 4 dummy rows with empty data
        { name: "", location: "" },
        { name: "", location: "" },
        { name: "", location: "" },
        { name: "", location: "" }
    ];

    const openModal = (title) => {
        modalTitle.textContent = title;
        missionNameInput.value = "";
        missionLocationInput.value = "";
        modal.classList.remove("hidden");
    };

    const closeModal = () => {
        modal.classList.add("hidden");
        editIndex = null;
    };

    const renderTable = () => {
        [...missionTableBody.children].forEach((row) => row.remove());
        missions.forEach((mission, index) => {
            const row = document.createElement("tr");
    
            // Jika mission kosong, hanya tampilkan baris kosong
            if (mission.name === "" && mission.location === "") {
                row.innerHTML = `
                    <td>${index + 1}</td>
                    <td></td>
                    <td></td>
                    <td></td>
                `;
            } else {
                row.innerHTML = `
                    <td>${index + 1}</td>
                    <td>${mission.name}</td>
                    <td>${mission.location}</td>
                    <td>
                        <button class="edit-btn" data-index="${index}">Edit</button>
                        <span class="divider">|</span>
                        <button class="delete-btn" data-index="${index}">Delete</button>
                    </td>
                `;
            }
    
            missionTableBody.appendChild(row);
        });
    };
    

    addMissionBtn.addEventListener("click", () => {
        openModal("Add Mission");
    });

    cancelBtn.addEventListener("click", closeModal);

    missionForm.addEventListener("submit", (event) => {
        event.preventDefault();
        const name = missionNameInput.value.trim();
        const location = missionLocationInput.value.trim();
    
        if (editIndex !== null) {
            // Jika dalam mode edit, perbarui data di indeks yang sesuai
            missions[editIndex] = { name, location };
        } else {
            // Cari baris kosong pertama untuk mengisi data baru
            const emptyIndex = missions.findIndex(
                (mission) => mission.name === "" && mission.location === ""
            );
            if (emptyIndex !== -1) {
                // Isi data baru di baris kosong pertama
                missions[emptyIndex] = { name, location };
            } else {
                // Jika tidak ada baris kosong, tambahkan data di akhir
                missions.push({ name, location });
            }
        }
    
        renderTable();
        closeModal();
    });
    

    missionTableBody.addEventListener("click", (event) => {
        const index = event.target.dataset.index;
        if (event.target.classList.contains("edit-btn")) {
            editIndex = index;
            missionNameInput.value = missions[index].name;
            missionLocationInput.value = missions[index].location;
            openModal("Edit Mission");
        } else if (event.target.classList.contains("delete-btn")) {
            if (confirm("Are you sure you want to delete this mission?")) {
                missions.splice(index, 1);
                renderTable();
            }
        }
    });

    // Render the table initially with dummy data
    renderTable();
});
