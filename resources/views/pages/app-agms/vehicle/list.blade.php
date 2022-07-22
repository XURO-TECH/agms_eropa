@extends('pages.app-agms.index')
@section('content')
    <a href="{{route('app.createVehicle')}}" type="button"
       class="btn btn-primary btn-block btn-sm waves-effect waves-light add-vehicle title-botton">Add Vehicle</a>


    <h4 class="home">List Of Vehicle</h4>
    @if($vehicles->count()) 
    @foreach($vehicles as $vehicle)
        <div class="card margin-card">
            <div class="flex-menu">
                <a href="#" id="buttonDeleteVehicle" class="margin-trash" data-toggle="modal" data-id="{{$vehicle->id}}"
                   data-target="#modalDelete">
                    <i class="far fa-trash-alt fa-2x"> </i>
                </a>
                <a href="{{route('app.editVehicle',$vehicle->id)}}">
                    <i class="fas fa-edit fa-2x"> </i>
                </a>
            </div>

            <div class="card-body">
                <p class="card-text">Vehicle Name : {{$vehicle->car_type}}</p>
                <p class="card-text">Vehicle Name : {{$vehicle->license_plate}}</p>
                @if($vehicle->qrCodeVehicle !== null)
                    <button id="modalQr" type="button" class="btn btn-info btn-block btn-sm waves-effect waves-light"
                            data-toggle="modal"
                            data-target="#myModal" data-qr="{{$vehicle->qrCodeVehicle->qrcode_image_path}}">Show QrCode
                    </button>
                @else
                    <button id="modalQr" type="button" class="btn btn-info btn-block btn-sm waves-effect waves-light"
                            data-toggle="modal"
                            data-target="#myModal" data-qr="{{asset('assets/images/qr-code.png')}}">Show QrCode
                    </button>
                @endif
            </div>
        </div>
       
    @endforeach
    @else
    <div class="margin-list"></div> 
    @endif

    {{ $vehicles->links() }}
    <div class="space-list"> </div>
    <!-- modal qrcode -->
    <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="myModalLabel">QRCode</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body ">
                    <img id="imgQr" class="qr-modal" src="" style="height: 200px; width: 200px;">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-block waves-effect" data-dismiss="modal">Close
                    </button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <div id="modalDelete" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modalDeleteLabel"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="modalDeleteLabel">Delete</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body ">
                    <input type="hidden" id="idVehicle" value="">
                    <p> Apakah anda yakin ingin menghapus data tersebut ? </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary waves-effect waves-light" onclick="deleteVehicle()">
                        Delete
                    </button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
@endsection
@section('js')
    <script>
        $(document).on("click", "#modalQr", function () {
            var parseQr = $('#imgQr').attr('src', $(this).data('qr'));
        });

        $(document).on("click", "#buttonDeleteVehicle", function () {
            console.log($(this).data('id'))
            var parseId = $('#idVehicle').val($(this).data('id'));
        });

        function deleteVehicle() {
            var id = $('#idVehicle').val();
            $.ajax({
                url: "/app/deleteVehicle",
                headers: {
                    'X-CSRF-TOKEN': '{{csrf_token()}}'
                },
                data: {
                    'id': id,
                },
                method: "POST",
                dataType: "JSON",
                success: function (data) {
                    location.reload();
                }
            });
        }
    </script>
@endsection
