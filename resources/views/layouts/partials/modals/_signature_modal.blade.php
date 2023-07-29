<div id="signature-modal" class="signature__modal">
    <div class="signature-modal-content">
        <div class="d-flex align-items-center justify-content-between">
            <h5 class="fw-bold mb-0">Write your signature here.</h5>
            <span class="close" id="close-signature-modal">&times;</span>
        </div>
        <div class="row p-3">
            <canvas id="signature-canvas" class="signature__pad" style="cursor: url('{{asset('image/pen.png')}}') 3 40,
        pointer;"></canvas>
        </div>
        <div class="row d-flex flex-row">
            <button class="btn btn-sm w-50" id="clear-signature-pad">Clear</button>
            <button class="btn btn-sm w-50" id="attach-signature-to-id">Attach to ID</button>
        </div>
    </div>
</div>
