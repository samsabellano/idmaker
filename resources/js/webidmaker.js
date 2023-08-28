import domtoimage from "dom-to-image";
// Mirror input field
const firstName = document.getElementById("firstName");
const middleName = document.getElementById("middleName");
const lastName = document.getElementById("lastName");
const suffix = document.getElementById("suffix");
const birthDate = document.getElementById("birthDate");
const college = document.querySelector("#college");
const course = document.getElementById("course");
const studentIdNumber = document.getElementById("studentIdNumber");
const schoolYear = document.getElementById("schoolYear");
const guardianFullName = document.getElementById("guardianFullName");
const guardianContactNumber = document.getElementById("guardianContactNumber");
const guardianCompleteAddress = document.getElementById(
    "guardianCompleteAddress"
);

firstName.addEventListener("input", function () {
    textFormatterForName(this);
    document.getElementById("previewFirstName").textContent = this.value;
});

middleName.addEventListener("input", function () {
    textFormatterForName(this);
    shortenedMiddleName();
});

lastName.addEventListener("input", function () {
    textFormatterForName(this);
    document.getElementById("previewLastName").textContent = this.value;
});

suffix.addEventListener("input", function () {
    personSuffix();
});

birthDate.addEventListener("input", function () {
    document.getElementById("previewBirthDate").textContent = this.value;
});

college.addEventListener("input", function () {
    document.getElementById("previewCollege").textContent = this.value;
});

schoolYear.addEventListener("input", function () {
    document.getElementById("previewSchoolYear").textContent = this.value;
});

course.addEventListener("input", function () {
    document.getElementById("previewCourse").textContent = this.value;
});

studentIdNumber.addEventListener("input", function () {
    document.getElementById("previewStudentIdNumber").textContent = this.value;
});

guardianFullName.addEventListener("input", function () {
    document.getElementById("previewGuardianFullName").textContent = this.value;
});

guardianCompleteAddress.addEventListener("input", function () {
    document.getElementById("previewGuardianCompleteAddress").textContent =
        this.value;
});

guardianContactNumber.addEventListener("input", function () {
    document.getElementById("previewGuardianContactNumber").textContent =
        this.value;
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
    const middleNameElement = document.getElementById("previewMiddleName");
    const middleNameResult = middleName.value.charAt(0).toUpperCase();
    if (middleNameResult) {
        middleNameElement.textContent = `${middleNameResult}.`;
    } else {
        middleNameElement.textContent = "";
    }

    const words = middleName.value.split(" ");
    for (var i = 0; i < words.length; i++) {
        const word = words[i];
        words[i] = word.charAt(0).toUpperCase() + word.slice(1);
    }
    middleName.value = words.join(" ");
};

const personSuffix = () => {
    const suffixElement = document.getElementById("previewSuffix");
    const pSuffix = suffix.value;

    if (pSuffix) {
        suffixElement.textContent = `${pSuffix}.`;
    } else {
        suffixElement.textContent = "";
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
        webcam.start();
        btnOnOff.textContent = stopCamLabel;
        btnOnOff.style.backgroundColor = "#1A1E33";
        btnOnOff.style.color = "#FFFFFF";
    } else {
        webcam.stop();
        btnOnOff.textContent = startCamLabel;
        btnOnOff.style.backgroundColor = "#E5E5E5";
        btnOnOff.style.color = "#1A1E33";
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

const btnSaveIdRecord = document.getElementById("btnSaveIdRecord");
const IDFront = document.getElementById("IDFront");
const IDBack = document.getElementById("IDBack");

btnSaveIdRecord.onclick = function () {
    domtoimage.toBlob(IDFront).then(function (blob) {
        window.saveAs(blob, "front.png");
    });
    domtoimage.toBlob(IDBack).then(function (blob) {
        window.saveAs(blob, "back.png");
    });
};
