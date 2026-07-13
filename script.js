// Load all patients when the page opens
loadPatients();

function loadPatients() {

    fetch("fetch.php")
        .then(response => response.text())
        .then(data => {
            document.getElementById("patientTable").innerHTML = data;
        });

}

// Add a new patient
document.getElementById("patientForm").addEventListener("submit", function(e){

    e.preventDefault();

    let formData = new FormData();

    formData.append("name", document.getElementById("name").value);
    formData.append("age", document.getElementById("age").value);

    fetch("insert.php",{

        method:"POST",
        body:formData

    })

    .then(response => response.text())

    .then(data=>{

        document.getElementById("patientForm").reset();

        loadPatients();

    });

});


// Toggle Status

function toggleStatus(id){

    let formData = new FormData();

    formData.append("id",id);

    fetch("toggle.php",{

        method:"POST",
        body:formData

    })

    .then(response=>response.text())

    .then(data=>{

        loadPatients();

    });

}