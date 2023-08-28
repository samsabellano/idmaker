<div id="photo-modal" class="photo__modal">
    <div class="photo-modal-content">
        <div class="d-flex align-items-center justify-content-between">
            <h5 class="fw-bold mb-0">Take a Photo</h5>
            <span class="close" id="close-photo-modal">&times;</span>
        </div>
        <div class="row">
            <div class="col-md-6 d-flex flex-column justify-content-center">
                <video id="webCam" autoplay playsinline width="400" height="400"></video>
                <div class="d-flex flex-row gap-3 justify-content-center ">
                    <button type="button" class="btn btn__toggle__on__of__camera" id="btn-on-off-camera">Start Camera</button>
                    <button type="button" class="btn" id="btn-take-picture">
                        <i class="fa-solid fa-camera"></i>
                        Take Photo
                    </button>
                </div>
            </div>
            <div class="col-md-6 d-flex flex-column justify-content-center align-items-center">
                <canvas id="canvas" style="height: 19rem !important; width: 25rem !important"></canvas>
                <div class="d-flex flex-row gap-3 mt-5 justify-content-center ">
                    <button type="button" class="btn btn-sm btn-danger disabled" id="btn-display-snapped-picture">Attach
                        to ID</button>
                </div>
            </div>

        </div>
    </div>
</div>
