@extends('main', ['Create Student ID'])
@section('main-content')
<video id="video" width="640" height="480" autoplay></video>
<button id="capture">Capture</button>
<button id="download">Download as PNG</button>
<canvas id="canvas" width="640" height="480"></canvas>
@endsection
