<div class="padding">
    <div class="row">

        <div class="col-sm-6 offset-sm-3">

            <form id="stu_form" method="POST" action="{{ route('EventsInsert.store') }}" enctype="multipart/form-data"  ui-jp="parsley" novalidate="">
                {{ csrf_field() }}
                <div class="box">
                    <div class="box-header">
                        <h2>Events Entry</h2>
                    </div>
                    <div class="box-body">
                        <p class="text-muted">please fill the fields below.</p>
                        <div class="row m-b">
                            <div class="col-sm-12">
                                <input type="file" name="profileimg">

                            </div>

                        </div>
                        <div class="row m-b">
                            <div class="col-sm-6">
                                <label>Events name</label>
                                <input type="text" class="form-control" placeholder="Events Name" required="" name="ename">
                            </div>
                            <div class="col-sm-6">
                                <label>Location</label>
                                <input type="text" class="form-control" placeholder="Location" required="" name="loc">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Clubs</label>
                            <select name="club" required="" class="form-control c-select m-y" data-parsley-id="31">
                                <?php
                                $data = DB::connection('mysql')->select('SELECT * FROM `clube`');
                                for($i=0;$i<sizeof($data);$i++){
                                ?>

                                <option value="{{$data[$i]->clube_name}}">{{$data[$i]->clube_name}}</option>
                                <?php
                                }
                                ?>



                            </select>
                        </div>
                        <div class="form-group">
                            <label>desc</label>
                            <textarea name="desc" class="form-control" rows="6" data-minwords="6" required="" placeholder="Type your message" data-parsley-id="25"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Price</label>
                            <input type="text" class="form-control" rows="6" data-minwords="6" required="" placeholder="Type your message" data-parsley-id="25" name="price"/>
                        </div>
                        <div class="form-group">
                            <label>Date</label>
                            <input type="date" class="form-control" rows="6" data-minwords="6" required="" placeholder="Type your message" data-parsley-id="25" name="date"/>
                        </div>
                        <div class="form-group row">

                            <?php
                            use Illuminate\Support\Facades\DB;$data = DB::connection('mysql')->select('SELECT * FROM `event_catlog`');
                            ?>
                            @foreach($data as $a)
                                <div class="col-sm-4" >
                                    <input type="radio" id="fal{{$a->id}}" name="falg" value="{{$a->event_name}}">
                                    <label for="fal{{$a->id}}" >{{$a->event_name}}</label>
                                </div>
                            @endforeach


                        </div>
                    </div>
                    <div class="dker p-a text-right">
                        <button type="submit" class="btn info">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>