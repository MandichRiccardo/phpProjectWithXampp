function validateField(fieldId) {
    let field = document.getElementById(fieldId);
    let errorDiv = document.getElementById(fieldId + '-error');
    if (field.value.trim() === "") {
        errorDiv.textContent = "Questo campo non può essere vuoto";
    } else {
        errorDiv.textContent = "";
    }
}

function clearError(fieldId) {
    let errorDiv = document.getElementById(fieldId + '-error');
    errorDiv.textContent = "";
}

function validateForm(event) {
    let isValid = true;
    let emptyFields = [];

    let fields = ['name', 'surn', 'gender', 'dataPicker', 'city', 'res'];
    
    fields.forEach(function(fieldId) {
        let field = document.getElementById(fieldId);
        let errorDiv = document.getElementById(fieldId + '-error');
        if (field.value.trim() === "") {
            errorDiv.textContent = "Questo campo non può essere vuoto";
            emptyFields.push(fieldId);
            isValid = false;
        }
    });

    if (!isValid) {
        event.preventDefault();
        
        let warningMessage = "I seguenti campi sono stati lasciati vuoti:\n";
        emptyFields.forEach(function(fieldId) {
            let fieldLabel = document.querySelector('label[for="' + fieldId + '"]').textContent.replaceAll(":", "");
            warningMessage += "- " + fieldLabel + "\n";
        });
        const myPopup = new Popup({
            id: "popup1",
            title: "I seguenti campi sono stati lasciati vuoti",
            content: warningMessage,
            backgroundColor: "Green"
        });
        myPopup.show();
    }
    return isValid;
}