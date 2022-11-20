@extends(Cookie::get('Layout') == 'LayoutSidebar' ? 'Layouts.master' : 'Layouts.master-layouts')


@section('title') Qamar Care Cards @endsection

@section('css')
<!-- DataTables -->
<link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
<style>



    /* This is the front side of card */

    .CardSizeFront {
        height: 580px;
        width: 680px;
        background-repeat: no-repeat;
    }

    .TableFront {
        width: 640px;
        margin-top: 145px;
        white-space: nowrap;

    }

    .TableFrontTr {
        width: 640px;
        white-space: nowrap;

    }


    .TableFrontDetailsTd {
        width: 500px;
        white-space: nowrap;
    }



















    /* table in details name  */
    .TableFrontDetailsTableName {
        width: 450px;
    }

    .TableFrontDetailsTableNameTr {
        width: 450px;
    }

    .TableFrontDetailsTableNameTdEnglish {
        max-width: 250px;
        padding-left: 80px;
        padding-top: 5px;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        font-weight: bold;
        font-size: large;
        font-family: 'Courier New', Courier, monospace;
    }

    .TableFrontDetailsTableNameTdDari {
        max-width: 250px;
        padding-right: 30px;
        padding-top: 5px;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        text-align: right;
        direction: rtl;
        font-weight: bold;
        font-size: large;
        font-family: 'Courier New', Courier, monospace;

    }


















    .TableFrontDetailsTableFatherName {
        width: 450px;
        margin-top: 10px;
    }

    .TableFrontDetailsTableFatherNameTr {
        width: 450px;
    }

    .TableFrontDetailsTableFatherNameTdEnglish {
        max-width: 250px;
        padding-left: 90px;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        font-weight: bold;
        font-size: large;
        font-family: 'Courier New', Courier, monospace;
    }

    .TableFrontDetailsTableFatherNameTdDari {
        max-width: 250px;
        padding-right: 70px;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        text-align: right;
        direction: rtl;
        font-weight: bold;
        font-size: large;
        font-family: 'Courier New', Courier, monospace;
    }


















    .TableFrontDetailsTableStartDate {
        width: 450px;
    }

    .TableFrontDetailsTableStartDateTr {
        width: 450px;
    }

    .TableFrontDetailsTableStartDateTdEnglish {
        max-width: 250px;
        padding-left: 105px;
        padding-top: 5px;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        font-weight: bold;
        font-size: large;
        font-family: 'Courier New', Courier, monospace;
    }

    .TableFrontDetailsTableStartDateTdDari {
        max-width: 250px;
        padding-right: 105px;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        text-align: right;
        direction: rtl;
        font-weight: bold;
        font-size: large;
        font-family: 'Courier New', Courier, monospace;

    }












    .TableFrontDetailsTableEndDate {
        width: 450px;
    }

    .TableFrontDetailsTableEndDateTr {
        width: 450px;
    }

    .TableFrontDetailsTableEndDateTdEnglish {
        max-width: 250px;
        padding-left: 110px;
        padding-top: 5px;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        font-weight: bold;
        font-size: large;
        font-family: 'Courier New', Courier, monospace;
    }

    .TableFrontDetailsTableEndDateTdDari {
        max-width: 250px;
        padding-right: 95px;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        text-align: right;
        direction: rtl;
        font-weight: bold;
        font-size: large;
        font-family: 'Courier New', Courier, monospace;

    }










    .TableFrontDetailsTableQCC {
        width: 450px;
    }

    .TableFrontDetailsTableQCCTr {
        width: 450px;
    }

    .TableFrontDetailsTableQCCTdEnglish {
        max-width: 250px;
        padding-left: 125px;
        padding-top: 8px;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        font-weight: bold;
        font-size: large;
        font-family: 'Courier New', Courier, monospace;
    }

    .TableFrontDetailsTableQCCTdDari {
        max-width: 250px;
        padding-right: 110px;
        padding-top: 8px;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        text-align: right;
        direction: rtl;
        font-weight: bold;
        font-size: large;
        font-family: 'Courier New', Courier, monospace;

    }







    .TableFrontImageTd {
        width: 140px;
        padding-left: 5px;
        white-space: nowrap;
    }








    /* This is the back side of card */
    .CardSizeBack {
        height: 580px;
        width: 680px;
        margin-top: 400px;
        background-repeat: no-repeat;
    }

    .TableBack {
        width: 680px;
        white-space: nowrap;
    }

    .TableBackTr {}

    .TableBackTd {
        white-space: nowrap;
        float: right;
        margin-top: 340px;
        margin-right: 50px;
    }
</style>

@endsection

@section('content')

<div class="row">
    <div class="col-12">
        <a href="{{route('AllCareCard')}}" class="btn btn-info btn-lg waves-effect btn-label waves-light m-3"><i class="bx bx-left-arrow  font-size-16 label-icon"></i>Back</a>
        <a href="javascript:window.print()" class="btn btn-dark waves-effect waves-light mr-1"><i class="fa fa-print"></i></a>
        <a href="{{route('PrintCareCard', ['data' => $data -> id])}}" class="btn btn-success waves-effect waves-light print"><i class="bx bxs-printer   font-size-16 align-middle"></i>Confirm Print</a>
    </div>
</div>

<div class="CardSizeFront">
    <div class="row">
        <div style=" background-image: url('{{ URL::asset('/assets/images/qcc/front.jpeg') }}'); height: 580px; width: 680px; background-repeat: no-repeat; ">
            <div class="table-responsive">
                <table class="TableFront">
                    <tr class="TableFrontTr">
                        <td class="TableFrontDetailsTd">
                            <div class="table-responsive">
                                <table class="TableFrontDetailsTableName">
                                    <tr class="TableFrontDetailsTableNameTr">
                                        <td class="TableFrontDetailsTableNameTdEnglish"><span class="h5">{{$data -> FirstName}}</span></td>
                                        <td class="TableFrontDetailsTableNameTdDari"><span class="h5">{{$data -> FirstNameLocal}}</span></td>
                                    </tr>
                                </table>
                            </div>
                            <div class="table-responsive">
                                <table class="TableFrontDetailsTableFatherName">
                                    <tr class="TableFrontDetailsTableFatherNameTr">
                                        <td class="TableFrontDetailsTableFatherNameTdEnglish"><span class="h5">{{$data -> FatherName}}</span></td>
                                        <td class="TableFrontDetailsTableFatherNameTdDari"><span class="h5">{{$data -> FatherNameLocal}}</span></td>
                                    </tr>
                                </table>
                            </div>
                            <div class="table-responsive">
                                <table class="TableFrontDetailsTableStartDate">
                                    <tr class="TableFrontDetailsTableStartDateTr">
                                        <td class="TableFrontDetailsTableStartDateTdEnglish"><span class="h5">{{$data -> created_at -> format("d-m-Y")}}</span></td>
                                        <td class="TableFrontDetailsTableStartDateTdDari"><span class="h5">{{ \Morilog\Jalali\Jalalian::fromCarbon($data -> created_at) -> format('j-F-Y'); }}</span></td>
                                    </tr>
                                </table>
                            </div>
                            <div class="table-responsive">
                                <table class="TableFrontDetailsTableEndDate">
                                    <tr class="TableFrontDetailsTableEndDateTr">
                                        <td class="TableFrontDetailsTableEndDateTdEnglish"><span class="h5">{{$data -> created_at ->addYear(5) -> format("d-m-Y")  }}</span></td>
                                        <td class="TableFrontDetailsTableEndDateTdDari"><span class="h5">{{    \Morilog\Jalali\Jalalian::fromCarbon($data -> created_at ->addYear(5)) -> format('j-F-Y'); }}</span></td>
                                    </tr>
                                </table>
                            </div>
                            <div class="table-responsive">
                                <table class="TableFrontDetailsTableQCC">
                                    <tr class="TableFrontDetailsTableQCCTr">
                                        <td class="TableFrontDetailsTableQCCTdEnglish"><span class="h5">QCC-{{$data -> QCC}}</span></td>
                                        <td class="TableFrontDetailsTableQCCTdDari"><span class="h5">QCC-{{$data -> QCC}}</span></td>
                                    </tr>
                                </table>
                            </div>
                        </td>
                        <td class="TableFrontImageTd ">
                            <img src="{{URL::asset('/uploads/QamarCareCard/Beneficiaries/Profiles/'.$data -> Profile)}}" style="width: 140px; height: 140px;" class="rounded">
                        </td>
                    </tr>

                </table>
            </div>

        </div>
    </div>
</div>

<!-- This side is the back of the card -->
<div class="CardSizeBack">
    <div class="row">
        <div style=" background-image: url('{{ URL::asset('/assets/images/qcc/back.jpeg') }}'); height: 580px; width: 680px; background-repeat: no-repeat; ">

            <table class="TableBack">

                <tr>
                    <td class="TableBackTd">{!! DNS2D::getBarcodeSVG(''.$data->QCC, 'QRCODE', 4, 4, 'white',true) !!}</td>
                </tr>
            </table>
        </div>
    </div>
</div>




<!-- end row -->

@endsection
@section('script')
<script src="{{ URL::asset('/assets/js/pages/sweetalert.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/bootstrap-rating/bootstrap-rating.min.js') }} "></script>

<script>
    $('.print').on('click', function(event) {
        event.preventDefault();
        const url = $(this).attr('href');
        swal({
            title: 'Are you sure?',
            text: 'Are you sure that this record is printed!',
            icon: 'warning',
            buttons: ["Cancel", "Yes!"],
        }).then(function(value) {
            if (value) {
                window.location.href = url;
            }
        });
    });
</script>

@endsection