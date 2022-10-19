@extends('layouts.master-layouts')

@section('title') Qamar Care List @endsection

@section('css')
<!-- DataTables -->
<link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
<style>
    /* html {
        background-color: #000;
    } */


    /* This is the front side of card */

    .CardSizeFront {
        /* position: fixed; */
        height: 580px;
        width: 680px;
        /* background-color: papayawhip; */
        /* margin: auto; */
        margin-top: 30px;
        background-repeat: no-repeat;
    }

    .TableFront {
        width: 640px;
        margin-top: 145px;
        /* margin-left: 100px; */
        white-space: nowrap;
        /* border: 5px solid black; */

    }

    .TableFrontTr {
        width: 640px;
        /* margin-top: 155px; */
        /* margin-left: 100px; */
        white-space: nowrap;
        /* border: 5px solid black; */

    }


    .TableFrontDetailsTd {
        width: 500px;
        white-space: nowrap;
        /* border: 5px solid black; */
    }



















    /* table in details name  */
    .TableFrontDetailsTableName {
        width: 450px;
        /* border: 5px solid black; */
    }

    .TableFrontDetailsTableNameTr {
        width: 450px;
        /* border: 5px solid black; */
    }

    .TableFrontDetailsTableNameTdEnglish {
        max-width: 250px;
        /* border: 5px solid black; */
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
        /* border: 5px solid black; */
        padding-right: 80px;
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
        /* border: 5px solid black; */
    }

    .TableFrontDetailsTableFatherNameTr {
        width: 450px;
        /* border: 5px solid black; */
    }

    .TableFrontDetailsTableFatherNameTdEnglish {
        max-width: 250px;
        /* border: 5px solid black; */
        padding-left: 90px;
        /* padding-top: 2px; */
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        font-weight: bold;
        font-size: large;
        font-family: 'Courier New', Courier, monospace;
    }

    .TableFrontDetailsTableFatherNameTdDari {
        max-width: 250px;
        /* border: 5px solid black; */
        padding-right: 120px;
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
        /* border: 5px solid black; */
    }

    .TableFrontDetailsTableStartDateTr {
        width: 450px;
        /* border: 5px solid black; */
    }

    .TableFrontDetailsTableStartDateTdEnglish {
        max-width: 250px;
        /* border: 5px solid black; */
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
        /* border: 5px solid black; */
        padding-right: 110px;
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
        /* border: 5px solid black; */
    }

    .TableFrontDetailsTableEndDateTr {
        width: 450px;
        /* border: 5px solid black; */
    }

    .TableFrontDetailsTableEndDateTdEnglish {
        max-width: 250px;
        /* border: 5px solid black; */
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
        /* border: 5px solid black; */
        padding-right: 110px;
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
        /* border: 5px solid black; */
    }

    .TableFrontDetailsTableQCCTr {
        width: 450px;
        /* border: 5px solid black; */
    }

    .TableFrontDetailsTableQCCTdEnglish {
        max-width: 250px;
        /* border: 5px solid black; */
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
        /* border: 5px solid black; */
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
        /* border: 5px solid black; */
    }








    /* This is the back side of card */
    .CardSizeBack {
        /* position: fixed; */
        height: 580px;
        width: 680px;
        /* background-color: papayawhip; */
        /* margin: auto; */
        margin-top: 400px;
        background-repeat: no-repeat;
    }

    .TableBack {
        width: 680px;
        white-space: nowrap;
        /* border: 5px solid black; */
    }

    .TableBackTr {}

    .TableBackTd {
        white-space: nowrap;
        float: right;
        margin-top: 290px;
        margin-right: 50px;
        /* border: 5px solid black; */
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
                                        <td class="TableFrontDetailsTableNameTdEnglish"><span class="h4">{{$data -> FirstName}}</span></td>
                                        <td class="TableFrontDetailsTableNameTdDari"><span class="h4">{{$data -> FirstNameLocal}}</span></td>
                                    </tr>
                                </table>
                            </div>
                            <div class="table-responsive">
                                <table class="TableFrontDetailsTableFatherName">
                                    <tr class="TableFrontDetailsTableFatherNameTr">
                                        <td class="TableFrontDetailsTableFatherNameTdEnglish"><span class="h4">{{$data -> FatherName}}</span></td>
                                        <td class="TableFrontDetailsTableFatherNameTdDari"><span class="h4">{{$data -> FatherNameLocal}}</span></td>
                                    </tr>
                                </table>
                            </div>
                            <div class="table-responsive">
                                <table class="TableFrontDetailsTableStartDate">
                                    <tr class="TableFrontDetailsTableStartDateTr">
                                        <td class="TableFrontDetailsTableStartDateTdEnglish"><span class="h5">{{$data -> created_at -> format("d-m-Y")}}</span></td>
                                        <td class="TableFrontDetailsTableStartDateTdDari"><span class="h5">{{$data -> created_at -> format("d-m-Y")}}</span></td>
                                    </tr>
                                </table>
                            </div>
                            <div class="table-responsive">
                                <table class="TableFrontDetailsTableEndDate">
                                    <tr class="TableFrontDetailsTableEndDateTr">
                                        <td class="TableFrontDetailsTableEndDateTdEnglish"><span class="h5">{{$data -> created_at -> format("d-m-Y")}}</span></td>
                                        <td class="TableFrontDetailsTableEndDateTdDari"><span class="h5">{{$data -> created_at -> format("d-m-Y")}}</span></td>
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
            <!-- <table style="margin-left:232px; margin-top:22px;">

                <tr>
                    <td class="TableFrontTd ">
                        <div class="rating-star">
                            <input type="hidden" class="rating" data-filled="mdi mdi-star text-warning " data-empty="mdi mdi-star-outline text-muted" value="{{$data -> LevelPoverty}}" name="LevelPoverty" id="LevelPoverty" readonly />
                        </div>
                    </td>
                </tr>
            </table> -->
            <!-- <td rowspan="4" class="TableFrontTd "> </td> -->

        </div>
    </div>
</div>

<!-- This side is the back of the card -->
<div class="CardSizeBack">
    <div class="row">
        <div style=" background-image: url('{{ URL::asset('/assets/images/qcc/back.jpeg') }}'); height: 580px; width: 680px; background-repeat: no-repeat; ">

            <table class="TableBack">

                <tr>
                    <td class="TableBackTd">{!! DNS2D::getBarcodeSVG(''.$data->QCC, 'QRCODE', 6, 6, 'black',true) !!}</td>
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