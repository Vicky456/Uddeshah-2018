<div class="no-padding wow fadeIn" id="sli_div">
    <!-- start blog section -->
    <section class="no-padding wow fadeIn">
        <div class="container-fluid">
            <div class="row blog-post-style4">
                <div class="col-md-12 no-padding xs-padding-15px-lr">
                    <ul class="blog-grid blog-4col gutter-small">
                        <li class="grid-sizer"></li>

                    <?php
                    use Illuminate\Support\Facades\DB;


                    $data = DB::connection('mysql')->select('SELECT * FROM `event_table`; ');



                    for($i=0;$i<sizeof($data);$i++){
                    ?>


                    <!-- start blog post item -->
                        <li class="grid-item wow">
                            <a href="/EventsReg?id={{$data[$i]->id}}">
                                <figure>
                                    <div class="blog-img bg-extra-dark-gray">
                                        <a href="/EventsReg?id={{$data[$i]->id}}"><img src="{{$data[$i]->img}}" alt="" ></a>
                                    </div>
                                    <figcaption>
                                        <div class="portfolio-hover-main text-left">
                                            <div class="blog-hover-box vertical-align-bottom">
                                                <span class="post-author text-extra-small text-medium-gray text-uppercase display-block margin-5px-bottom xs-margin-5px-bottom">{{$data[$i]->date_on}} | by <a href="" class="text-medium-gray">{{$data[$i]->dept}}</a></span>
                                                <h6 class="alt-font display-block text-white font-weight-600 no-margin-bottom"><a href="/EventsReg?id={{$data[$i]->id}}" class="text-white">{{$data[$i]->event_name}}</a></h6>
                                                <p class="text-medium-gray margin-10px-top width-80 md-width-100 blog-hover-text">Loc : {{$data[$i]->loc}}</p>
                                            </div>
                                        </div>
                                    </figcaption>
                                </figure>
                            </a>
                        </li>

                        <?php
                        }
                        ?>

                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- end post content -->
</div>s