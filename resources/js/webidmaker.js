// Mirror input field
const first_name = document.getElementById("id-text-input-first-name");
const middle_name = document.getElementById("id-text-input-middle-name");
const last_name = document.getElementById("id-text-input-last-name");
const suffix = document.getElementById("id-text-input-suffix");
const college = document.querySelector("#id-text-input-college");
const course = document.getElementById("id-text-input-course");
const school_id = document.getElementById("id-text-input-school-id");
const start_school_year = document.getElementById(
    "id-text-input-start-school-year"
);
const end_school_year = document.getElementById(
    "id-text-input-end-school-year"
);
const guardian_name = document.getElementById("id-text-input-guardian-name");
const guardian_contact_number = document.getElementById(
    "id-text-input-guardian-contact-number"
);
const guardian_address = document.getElementById(
    "id-text-input-guardian-address"
);

first_name.addEventListener("input", function () {
    textFormatterForName(this);
    document.getElementById("id-template-first-name").textContent = this.value;
});

middle_name.addEventListener("input", function () {
    textFormatterForName(this);
    shortenedMiddleName();
});

last_name.addEventListener("input", function () {
    textFormatterForName(this);
    document.getElementById("id-template-last-name").textContent = this.value;
});

suffix.addEventListener("input", function () {
    personSuffix();
});

college.addEventListener("input", function () {
    document.getElementById("id-template-college").textContent = this.value;
});

course.addEventListener("input", function () {
    document.getElementById("id-template-course").textContent = this.value;
});

school_id.addEventListener("input", function () {
    document.getElementById("id-template-school-id").textContent = this.value;
});

start_school_year.addEventListener("input", function () {
    idSchoolYear();
    validateSchoolYear();
});

end_school_year.addEventListener("input", function () {
    idSchoolYear();
    validateSchoolYear();
});

const textFormatterForName = (textInput) => {
    const words = textInput.value.split(" ");
    for (var i = 0; i < words.length; i++) {
        const word = words[i];
        words[i] = word.charAt(0).toUpperCase() + word.slice(1);
    }
    textInput.value = words.join(" ");
};

const shortenedMiddleName = () => {
    const middleNameElement = document.getElementById(
        "id-template-middle-name"
    );
    const middleNameResult = middle_name.value.charAt(0).toUpperCase();
    if (middleNameResult) {
        middleNameElement.textContent = `${middleNameResult}.`;
    } else {
        middleNameElement.textContent = "";
    }

    const words = middle_name.value.split(" ");
    for (var i = 0; i < words.length; i++) {
        const word = words[i];
        words[i] = word.charAt(0).toUpperCase() + word.slice(1);
    }
    middle_name.value = words.join(" ");
};

const personSuffix = () => {
    const suffixElement = document.getElementById("id-template-suffix");
    const pSuffix = suffix.value;

    if (pSuffix) {
        suffixElement.textContent = `${pSuffix}.`;
    } else {
        suffixElement.textContent = "";
    }
};

const idSchoolYear = () => {
    const startYear = start_school_year.value;
    const endYear = end_school_year.value;
    const schoolYearElement = document.getElementById(
        "id-template-school-year"
    );
    schoolYearElement.textContent = "S.Y.";

    if (startYear && endYear) {
        const schoolYearResult = `S.Y. ${startYear} - ${endYear}`;
        schoolYearElement.textContent = schoolYearResult;
    } else {
        schoolYearElement.textContent = "S.Y.";
    }
};

const validateSchoolYear = () => {
    var invalidSchoolYearElement =
        document.getElementById("invalid-start-year");

    if (start_school_year && end_school_year) {
        const startYear = parseInt(start_school_year.value);
        const endYear = parseInt(end_school_year.value);

        if (startYear > endYear) {
            invalidSchoolYearElement.textContent =
                "Start year should be lesser than the end year.";
            invalidSchoolYearElement.style.display = "block";
            start_school_year.classList.add("is-invalid");
        } else if (startYear === endYear) {
            invalidSchoolYearElement.textContent =
                "Start year should not be equal to end year.";
            invalidSchoolYearElement.style.display = "block";
            start_school_year.classList.add("is-invalid");
        } else {
            invalidSchoolYearElement.textContent = "";
            invalidSchoolYearElement.style.display = "none";
            start_school_year.classList.remove("is-invalid");
        }
    }
};

const signatureModal = document.getElementById("signature-modal");
const btnWriteSignature = document.getElementById("btn-write-signature");
const closeSignatureModal = document.getElementById("close-signature-modal");
const clearSignaturePad = document.getElementById("clear-signature-pad");
const attachSignatureToId = document.getElementById("attach-signature-to-id");
const signatureCanvas = document.getElementById("signature-canvas");
const idTempleSignature = document.getElementById("id-template-signature");
const canvasContext = signatureCanvas.getContext("2d");

let isDrawing = false;
canvasContext.lineWidth = 1;
canvasContext.lineJoin = canvasContext.lineCap = "round";

const handlePointerDown = (event) => {
    isDrawing = true;
    canvasContext.beginPath();
    const [positionX, positionY] = getCursorPosition(event);
    canvasContext.moveTo(positionX, positionY);
};

signatureCanvas.addEventListener("pointerdown", handlePointerDown, {
    passive: true,
});

const handlePointerMove = (event) => {
    if (!isDrawing) return;
    const [positionX, positionY] = getCursorPosition(event);
    canvasContext.lineTo(positionX, positionY);
    canvasContext.stroke();
};

signatureCanvas.addEventListener("pointermove", handlePointerMove, {
    passive: true,
});

const getCursorPosition = (event) => {
    const rect = signatureCanvas.getBoundingClientRect();
    const scaleX = signatureCanvas.width / rect.width;
    const scaleY = signatureCanvas.height / rect.height;
    const positionX = (event.clientX - rect.left) * scaleX;
    const positionY = (event.clientY - rect.top) * scaleY;
    return [positionX, positionY];
};

const handlePointerUp = () => {
    isDrawing = false;
};

signatureCanvas.addEventListener("pointerup", handlePointerUp, {
    passive: true,
});

const clearSignPad = () => {
    canvasContext.clearRect(
        0,
        0,
        signatureCanvas.width,
        signatureCanvas.height
    );
};

clearSignaturePad.addEventListener("click", (event) => {
    event.preventDefault();
    clearSignPad();
});

attachSignatureToId.addEventListener("click", (event) => {
    event.preventDefault();
    const signatureURL = signatureCanvas.toDataURL();
    idTempleSignature.src = signatureURL;
});

btnWriteSignature.addEventListener("click", () => {
    signatureModal.style.display = "block";
});

closeSignatureModal.addEventListener("click", () => {
    signatureModal.style.display = "none";
});

const closeModalIdForm = document.getElementById("close-modal-id-form");
closeModalIdForm.addEventListener("click", (event) => {
    event.preventDefault();
    clearSignPad();
});

attachSignatureToId.addEventListener("click", () => {
    const signatureCanvasURL = signatureCanvas.toDataURL();
    const signatureFile = new File([signatureCanvasURL], "signature.png", {
        type: "image/png",
    });

    const fileList = new FileList();
    fileList.add(signatureFile);

    const signatureFileInput = document.getElementById("signature-file");
    signatureFileInput.files = fileList;
    // signatureFileInput.value = "";
});

// Get the modal
const photoModal = document.getElementById("photo-modal");

// Get the button that opens the modal
const btnTakeAPhoto = document.getElementById("btn-take-a-photo");

// Get the <span> element that closes the modal
const span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal
btnTakeAPhoto.addEventListener("click", () => {
    photoModal.style.display = "block";
});

// When the user clicks on <span> (x), close the modal
span.addEventListener("click", () => {
    photoModal.style.display = "none";
});

// When the user clicks anywhere outside of the modal, close it
window.addEventListener("click", (event) => {
    if (event.target == photoModal) {
        photoModal.style.display = "none";
    }
    webcam.stop();
});

// Web Cam Modal Functionalities
const idTemplatePicture = document.getElementById("id-template-picture");
const webCamEl = document.getElementById("webCam");
const canvasEl = document.getElementById("canvas");
const btnOnOff = document.getElementById("btn-on-off-camera");
const btnSnap = document.getElementById("btn-take-picture");
const btnDisplaySnappedPic = document.getElementById(
    "btn-display-snapped-picture"
);
const btnShowTakePhotoModal = document.getElementById("btn-take-a-photo");
const btnClosephotoModal = document.getElementById("close-photo-modal");
const webcam = new Webcam(webCamEl, "user", canvasEl);

let startCamLabel = "Start Camera";
let stopCamLabel = "Stop Camera";

btnOnOff.addEventListener("click", () => {
    if (btnOnOff.textContent === startCamLabel) {
        btnOnOff.textContent = stopCamLabel;
        webcam.start();
    } else {
        btnOnOff.textContent = startCamLabel;
        webcam.stop();
    }
});

btnSnap.addEventListener("click", () => {
    webcam.snap();
    webcam.start();
    btnDisplaySnappedPic.classList.remove("disabled");
});

btnClosephotoModal.addEventListener("click", () => {
    webcam.stop();
});

btnShowTakePhotoModal.addEventListener("click", () => {
    webcam.start();
    btnOnOff.textContent = stopCamLabel;
});

btnDisplaySnappedPic.addEventListener("click", () => {
    closeModalAndOffCam();
    displayPictureToIdTemplate();
});

const closeModalAndOffCam = () => {
    photoModal.style.display = "none";
    webcam.stop();
};

const idPictureDiv = document.getElementById("student-id-picture");
const displayPictureToIdTemplate = () => {
    const imgURL = canvasEl.toDataURL();
    const ctx = canvasEl.getContext("2d");
    idTemplatePicture.src = imgURL;
    ctx.clearRect(0, 0, canvasEl.width, canvasEl.height);
    btnDisplaySnappedPic.classList.add("disabled");
    idPictureDiv.style.width = "155px";
    idPictureDiv.style.height = "133px";
};

// END Web Cam Modal Functionalities
