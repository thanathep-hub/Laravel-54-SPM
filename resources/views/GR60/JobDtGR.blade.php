<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Table</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">

    <style>
        body {
            background-color: #26A69A;
        }
    </style>
</head>
<body>
<!-- Modal Jobs -->
{{--@include('GR60.EditJobs')--}}
{{--<div class="modal fade modal-xl" id="#Edit{{$JobList->JobNo}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">--}}
{{--    <div class="modal-dialog">--}}
{{--        <div class="modal-content">--}}
{{--            <!-- Modal Jobs Title -->--}}
{{--            <div class="modal-header">--}}
{{--                <h5 class="modal-title fw-bold text-center" id="exampleModalLabel">ข้อมูล Job ที่รับเมล็ด</h5>--}}
{{--                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>--}}
{{--            </div>--}}
{{--            <!-- Modal Jobs Title -->--}}
{{--            <div class="modal-body">--}}
{{--                <form class="row g-3">--}}
{{--                    <div class="col-sm-3">--}}
{{--                        <div class="row pt-3 mb-0">--}}
{{--                            <label for="JobNo" class="col-sm-4 col-form-label text-center"--}}
{{--                                   style="padding-left: 0px;padding-right: 0px;">JobNo :</label>--}}
{{--                            <div class="col-sm-8" style="padding-left: 0px;padding-right: 0px;">--}}
{{--                                <input type="text" class="form-control" id="JobNo" placeholder="JobNo">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-sm-3">--}}
{{--                        <div class="row pt-3 mb-0">--}}
{{--                            <label for="" class="col-sm-5 col-form-label text-center pr-0">จนท.ส่งเสริม: </label>--}}
{{--                            <div class="col-sm-7">--}}
{{--                                <input type="text" class="form-control" id="" placeholder="จนท.ส่งเสริม">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-sm-3">--}}
{{--                        <div class="row pt-3 mb-0">--}}
{{--                            <label for="" class="col-sm-4 col-form-label text-center pr-0">รหัสผลิต: </label>--}}
{{--                            <div class="col-sm-8">--}}
{{--                                <input type="" class="form-control" id="" placeholder="รหัสผลิต">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-sm-3">--}}
{{--                        <div class="row pt-3 mb-0">--}}
{{--                            <label for="ZoneName_"--}}
{{--                                   class="col-sm-4 col-form-label text-center pr-0">พื้นที่ปลูก: </label>--}}
{{--                            <div class="col-sm-8">--}}
{{--                                <input type="text" class="form-control" id="ZoneName_" placeholder="พื้นที่ปลูก">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-sm-3">--}}
{{--                        <div class="row pt-3 mb-0">--}}
{{--                            <label for="JobNo" class="col-sm-4 col-form-label text-center"--}}
{{--                                   style="padding-left: 0px;padding-right: 0px;">ฤดูผลิต :</label>--}}
{{--                            <div class="col-sm-8" style="padding-left: 0px;padding-right: 0px;">--}}
{{--                                <input type="text" class="form-control" id="JobNo" placeholder="จำนวนปลูก">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-sm-3">--}}
{{--                        <div class="row pt-3 mb-0">--}}
{{--                            <label for="" class="col-sm-5 col-form-label text-center pr-0">จำนวนปลูก: </label>--}}
{{--                            <div class="col-sm-6">--}}
{{--                                <input type="text" class="form-control" id="" placeholder="จำนวนปลูก">--}}
{{--                            </div>--}}
{{--                            <span class="col-sm-1 col-form-label text-center">ต้น</span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-sm-3">--}}
{{--                        <div class="row pt-3 mb-0">--}}
{{--                            <label for="" class="col-sm-4 col-form-label text-center pr-0">เกษตรกร: </label>--}}
{{--                            <div class="col-sm-8">--}}
{{--                                <input type="" class="form-control" id="" placeholder="เกษตรกร">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-sm-3">--}}
{{--                        <div class="row pt-3 mb-0">--}}
{{--                            <label for="ZoneName_" class="col-sm-4 col-form-label text-center pr-0">ประเภทพืช: </label>--}}
{{--                            <div class="col-sm-8">--}}
{{--                                <input type="text" class="form-control" id="ZoneName_" placeholder="ประเภทพืช">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                </form>--}}
{{--            </div>--}}
{{--            <!-- Modal Jobs Footer -->--}}
{{--            <div class="modal-footer">--}}
{{--                <button type="button" class="btn btn-success">อัพเดตข้อมูล</button>--}}
{{--                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">ปิด</button>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
<!-- /Modal Jobs -->

<!-- Data Table Jobs -->
<div class="container">
    <div class="rounded m-2 mt-4 p-2 bg-light shadow">
        <h3 class="mt-2 fw-bold text-center" style="color: #004d40">ตารางข้อมูล Jobs</h3>
        <hr class="border-0">
        <table id="JobsTable" class="display table table-striped p-2">
            <thead>
            <th>เลขที่</th>
            <th>ฤดูปลูก</th>
            <th>รหัสพันธุ์</th>
            <th>พืช</th>
            <th>เกษตรกร</th>
            <th>พื้นที่</th>
            <th>เพิ่มเติม</th>
            </thead>
            <tbody>
            @foreach($listJobDt as $JobList)
                <tr>
                    <td>{{$JobList->JobNo}}</td>
                    <td>{{$JobList->SeasonCode}}</td>
                    <td>{{$JobList->StrainCode}}</td>
                    <td>{{$JobList->SeedTypeName}}</td>
                    <td>{{$JobList->FmName}}</td>
                    <td>{{$JobList->ZoneName_}}</td>
                    <td>
                        <a href="#edit{{$JobList->JobNo}}" class="btn btn-success" data-bs-toggle="modal"
                           style="background-color:#004d40;color: white;">
                            {{--                            <i class="fa fa-edit"></i>--}}
                            เพิ่มเมล็ดพันธุ์
                        </a>
                        @include('GR60.EditJobs')
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
<!-- /Data Table Jobs -->

<!-- Link AJex and Data Table and Bootstrap -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<!-- /Link AJex and Data Table -->

<!--     Script for Data Table-->
<script type="text/javascript">
    // JobsTable
    $(document).ready(function () {
        $('#JobsTable').DataTable();
    });
</script>
<!--     /Script for Data Table -->
</body>
</html>