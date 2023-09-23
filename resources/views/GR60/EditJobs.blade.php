{{-- Edit Jobs --}}
<div class="modal fade modal-xl" id="#edit{{$JobList->JobNo}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Jobs Title -->
            <div class="modal-header">
                <h5 class="modal-title fw-bold text-center" id="exampleModalLabel">ข้อมูล Job ที่รับเมล็ด</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <!-- Modal Jobs Title -->
            <div class="modal-body">
{{--                <form class="row g-3">--}}
                {!! Form::model($listJobDt, ['method' => 'patch','route' => ['JobList.update', $JobList->JobNo] ]) !!}
                    <div class="row g-3">
                        <div class="col-sm-3">
                            <div class="row pt-3 mb-0">
{{--                                <label for="JobNo" class="col-sm-4 col-form-label text-center" style="padding-left: 0px;padding-right: 0px;">JobNo :</label>--}}
                                {!!  Form::label('JobNo','JobNo') !!}
                                <div class="col-sm-8" style="padding-left: 0px;padding-right: 0px;">
                                    {!! Form::text('JobNo', $JobList->JobNo, ['class' => 'form-control']) !!}
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="row pt-3 mb-0">
                                <label for="" class="col-sm-5 col-form-label text-center pr-0">จนท.ส่งเสริม: </label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" id="" placeholder="จนท.ส่งเสริม">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="row pt-3 mb-0">
                                <label for="" class="col-sm-4 col-form-label text-center pr-0">รหัสผลิต: </label>
                                <div class="col-sm-8">
                                    <input type="" class="form-control" id="" placeholder="รหัสผลิต">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="row pt-3 mb-0">
                                <label for="ZoneName_"
                                       class="col-sm-4 col-form-label text-center pr-0">พื้นที่ปลูก: </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="ZoneName_" placeholder="พื้นที่ปลูก">
                                </div>
                            </div>
                        </div>
                    </div>


{{--                </form>--}}
            </div>
            <!-- Modal Jobs Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">ปิด</button>
                {{Form::button('อัพเดตข้อมูล', ['class' => 'btn btn-success', 'type' => 'submit'] )}}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>