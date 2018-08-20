<section id="blog" class="wow fadeIn bg-black blog-post-style5" style="visibility: visible; animation-name: fadeIn;">
    <div class="container-fluid padding-six-lr sm-padding-15px-lr">
        <div class="row">
            <div class="col-md-12 no-padding xs-padding-15px-lr">
                <ul class="blog-grid blog-4col gutter-large" style="position: relative; height: 2224.8px;">
                    <li class="grid-sizer"></li>

                <?php
                use Illuminate\Support\Facades\DB;


                $data = DB::connection('mysql')->select('SELECT * FROM `event_table`; ');



                for($i=0;$i<sizeof($data);$i++){
                    ?>
                    <!-- start post item -->
                    <li class="grid-item wow fadeInUp last-paragraph-no-margin" style="visibility: visible; animation-name: fadeInUp; position: absolute; left: 0%; top: 0px;">
                        <div class="blog-post">
                            <div class="blog-post-images overflow-hidden blog-img bg-extra-dark-gray" >
                                <a href="/EventsReg?id={{$data[$i]->id}}" class="image-hover-style-1">
                                    <img src="{{$data[$i]->img}}" alt="" data-no-retina="" >
                                </a>
                                <div class="blog-categories bg-white text-uppercase text-extra-small alt-font"><a href="/EventsReg?id={{$data[$i]->id}}">{{$data[$i]->date_on}}</a></div>
                            </div>
                            <div class="post-details padding-40px-all bg-white sm-padding-20px-all">
                                <div class="blog-hover-color"></div>
                                <a href="/EventsReg?id={{$data[$i]->id}}" class="alt-font post-title text-medium text-extra-dark-gray width-90 display-block md-width-100 margin-5px-bottom">{{$data[$i]->event_name}}</a>
                                <div class="author">
                                    <span class="text-medium-gray text-uppercase text-extra-small display-inline-block"> <a href="/EventsReg?id={{$data[$i]->id}}" class="text-medium-gray">{{$data[$i]->date_on}} | by {{$data[$i]->dept}}</a></span>
                                </div>
                                <div class="separator-line-horrizontal-full bg-medium-gray margin-seven-tb md-margin-four-tb"></div>
                                <p>Loc : {{$data[$i]->loc}}</p>
                                <p>dept : {{$data[$i]->dept}}</p>
                            </div>
                        </div>
                    </li>
                    <!-- end post item -->

                    <?php
                    }
                    ?>

                </ul>
            </div>
        </div>

    </div>
</section>