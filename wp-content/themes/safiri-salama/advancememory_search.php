<?php
/**
 * Template Name: advance search
 **/
get_header();
?>

<section class="package_sec1 package_sec1-new">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Memorial Gallery</h1>
            </div>
        </div>
    </div>
</section>
<section class="search_margin">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="search_box search_ylw-new">
                    <div class="search_ylw-new1">
                        <div class="row">
                            <div class="col-md-12">
                                <form class="form-inline">
                                    <label for="sel1" class="lab_text">View tributes in memory of:</label>
                                    <select class="form-control form-control-new" id="sel1">
                                         <option>All Memorials</option>
                                        <?php
                                          
                                         
                               $msg1 = $wpdb->get_results("SELECT * FROM `wp_tribute`");
     
                                foreach($msg1 as $val1)
                                {
                                ?>
                                         <option value="<?php echo $val1->fname; ?> <?php echo $val1->lname; ?>"><?php echo $val1->fname; ?> <?php echo $val1->lname; ?></option>
                                         <?php
                                    }
                                    ?>
                                    </select>
                                    <a href="" class="red_btn red_btn-new">SEARCH</a>
                                    <button class="advance_Search">Advanced Search ›</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="search_ylw-new2" style="display:none;">
                        <div class="row">
                            <div class="col-md-12">
                                <form>
                                    <p>*Fill in any field to narrow your search criteria.</p>
                                    <div class="row">
                                      <div class="col-md-6">
                                          <input type="text" class="form-control" placeholder="First Name">
                                          <input type="text" class="form-control" placeholder="Second Name">
                                      </div>
                                      <div class="col-md-6">
                                          <select class="form-control" id="sel1">
                                                <option>Year Born</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                          </select>
                                          <select class="form-control" id="sel1">
                                                <option>Year Passed Away</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                          </select>
                                      </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-md-3 col-lg-2 pad_right0">
                                                    <span class="span_text-new1">Gender</span>
                                                </div>
                                                <div class="col-md-9 col-lg-10 pad_left0">
                                                    <div class="radio_class">
                                                        <div class="radio radio-inline radio-inline-new">
                                                            <input type="radio" id="inlineRadio1" value="option1" name="radioInline" checked="">
                                                            <label for="inlineRadio1"> Male </label>
                                                        </div>
                                                        <div class="radio radio-inline">
                                                            <input type="radio" id="inlineRadio2" value="option2" name="radioInline">
                                                            <label for="inlineRadio2"> Female </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <ul class="list-inline reset_list">
                                                <li class="list-inline-item"><a href="">Reset</a></li>
                                                <li class="list-inline-item"><a href="" class="red_btn">Apply FIlters</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="search_main">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="results_class">Your search has returned  <span> 233 </span>  results</h3>
                <div class="search_block-new">
                    <div class="search_box-new">
                        <div class="row">
                            <div class="col-md-2 col-3">
                                <img class="img-fluid w-100" alt="img" src="img/nelson-mandela-blog1.png">
                            </div>
                            <div class="col-md-10 col-9 pad_mob_left0">
                                <h4>Nelson Mandela (1945-2014)<span class="pull-right d-none d-md-block">Memorial created by Kim Kasmar on 10-18-2018</span></h4>
                                <p><a href="">www.safirisalama.com/nelson-mandela</a></p>
                                <span class="pull-right d-block d-md-none">Memorial created by Kim Kasmar on 10-18-2018</span>
                                <div class="d-none d-md-block">
                                    <p class="new_text-search ">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore etue ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim....</p>
                                    <a href="" class="red_btn memorial_btn">VIEW MEMORIAL</a>
                                </div>
                            </div>
                            <div class="col-12 d-block d-md-none">
                                <p class="new_text-search">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore etue ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim....</p>
                                <a href="" class="red_btn memorial_btn">VIEW MEMORIAL</a>
                            </div>
                        </div>
                    </div>
                    <div class="search_box-new">
                        <div class="row">
                            <div class="col-md-2 col-3">
                                <img class="img-fluid w-100" alt="img" src="img/nelson-mandela-blog1.png">
                            </div>
                            <div class="col-md-10 col-9 pad_mob_left0">
                                <h4>Nelson Mandela (1945-2014)<span class="pull-right d-none d-md-block">Memorial created by Kim Kasmar on 10-18-2018</span></h4>
                                <p><a href="">www.safirisalama.com/nelson-mandela</a></p>
                                <span class="pull-right d-block d-md-none">Memorial created by Kim Kasmar on 10-18-2018</span>
                                <div class="d-none d-md-block">
                                    <p class="new_text-search ">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore etue ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim....</p>
                                    <a href="" class="red_btn memorial_btn">VIEW MEMORIAL</a>
                                </div>
                            </div>
                            <div class="col-12 d-block d-md-none">
                                <p class="new_text-search">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore etue ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim....</p>
                                <a href="" class="red_btn memorial_btn">VIEW MEMORIAL</a>
                            </div>
                        </div>
                    </div>
                    <div class="search_box-new">
                        <div class="row">
                            <div class="col-md-2 col-3">
                                <img class="img-fluid w-100" alt="img" src="img/nelson-mandela-blog1.png">
                            </div>
                            <div class="col-md-10 col-9 pad_mob_left0">
                                <h4>Nelson Mandela (1945-2014)<span class="pull-right d-none d-md-block">Memorial created by Kim Kasmar on 10-18-2018</span></h4>
                                <p><a href="">www.safirisalama.com/nelson-mandela</a></p>
                                <span class="pull-right d-block d-md-none">Memorial created by Kim Kasmar on 10-18-2018</span>
                                <div class="d-none d-md-block">
                                    <p class="new_text-search ">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore etue ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim....</p>
                                    <a href="" class="red_btn memorial_btn">VIEW MEMORIAL</a>
                                </div>
                            </div>
                            <div class="col-12 d-block d-md-none">
                                <p class="new_text-search">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore etue ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim....</p>
                                <a href="" class="red_btn memorial_btn">VIEW MEMORIAL</a>
                            </div>
                        </div>
                    </div>
                    <div class="search_box-new">
                        <div class="row">
                            <div class="col-md-2 col-3">
                                <img class="img-fluid w-100" alt="img" src="img/nelson-mandela-blog1.png">
                            </div>
                            <div class="col-md-10 col-9 pad_mob_left0">
                                <h4>Nelson Mandela (1945-2014)<span class="pull-right d-none d-md-block">Memorial created by Kim Kasmar on 10-18-2018</span></h4>
                                <p><a href="">www.safirisalama.com/nelson-mandela</a></p>
                                <span class="pull-right d-block d-md-none">Memorial created by Kim Kasmar on 10-18-2018</span>
                                <div class="d-none d-md-block">
                                    <p class="new_text-search ">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore etue ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim....</p>
                                    <a href="" class="red_btn memorial_btn">VIEW MEMORIAL</a>
                                </div>
                            </div>
                            <div class="col-12 d-block d-md-none">
                                <p class="new_text-search">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore etue ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim....</p>
                                <a href="" class="red_btn memorial_btn">VIEW MEMORIAL</a>
                            </div>
                        </div>
                    </div>
                    <div class="search_box-new">
                        <div class="row">
                            <div class="col-md-2 col-3">
                                <img class="img-fluid w-100" alt="img" src="img/nelson-mandela-blog1.png">
                            </div>
                            <div class="col-md-10 col-9 pad_mob_left0">
                                <h4>Nelson Mandela (1945-2014)<span class="pull-right d-none d-md-block">Memorial created by Kim Kasmar on 10-18-2018</span></h4>
                                <p><a href="">www.safirisalama.com/nelson-mandela</a></p>
                                <span class="pull-right d-block d-md-none">Memorial created by Kim Kasmar on 10-18-2018</span>
                                <div class="d-none d-md-block">
                                    <p class="new_text-search ">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore etue ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim....</p>
                                    <a href="" class="red_btn memorial_btn">VIEW MEMORIAL</a>
                                </div>
                            </div>
                            <div class="col-12 d-block d-md-none">
                                <p class="new_text-search">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore etue ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim....</p>
                                <a href="" class="red_btn memorial_btn">VIEW MEMORIAL</a>
                            </div>
                        </div>
                    </div>
                    <div class="search_box-new">
                        <div class="row">
                            <div class="col-md-2 col-3">
                                <img class="img-fluid w-100" alt="img" src="img/nelson-mandela-blog1.png">
                            </div>
                            <div class="col-md-10 col-9 pad_mob_left0">
                                <h4>Nelson Mandela (1945-2014)<span class="pull-right d-none d-md-block">Memorial created by Kim Kasmar on 10-18-2018</span></h4>
                                <p><a href="">www.safirisalama.com/nelson-mandela</a></p>
                                <span class="pull-right d-block d-md-none">Memorial created by Kim Kasmar on 10-18-2018</span>
                                <div class="d-none d-md-block">
                                    <p class="new_text-search ">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore etue ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim....</p>
                                    <a href="" class="red_btn memorial_btn">VIEW MEMORIAL</a>
                                </div>
                            </div>
                            <div class="col-12 d-block d-md-none">
                                <p class="new_text-search">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore etue ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim....</p>
                                <a href="" class="red_btn memorial_btn">VIEW MEMORIAL</a>
                            </div>
                        </div>
                    </div>
                    <div class="search_box-new">
                        <div class="row">
                            <div class="col-md-2 col-3">
                                <img class="img-fluid w-100" alt="img" src="img/nelson-mandela-blog1.png">
                            </div>
                            <div class="col-md-10 col-9 pad_mob_left0">
                                <h4>Nelson Mandela (1945-2014)<span class="pull-right d-none d-md-block">Memorial created by Kim Kasmar on 10-18-2018</span></h4>
                                <p><a href="">www.safirisalama.com/nelson-mandela</a></p>
                                <span class="pull-right d-block d-md-none">Memorial created by Kim Kasmar on 10-18-2018</span>
                                <div class="d-none d-md-block">
                                    <p class="new_text-search ">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore etue ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim....</p>
                                    <a href="" class="red_btn memorial_btn">VIEW MEMORIAL</a>
                                </div>
                            </div>
                            <div class="col-12 d-block d-md-none">
                                <p class="new_text-search">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore etue ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim....</p>
                                <a href="" class="red_btn memorial_btn">VIEW MEMORIAL</a>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="" class="setting_btn setting_btn1">Show More Memorials</a>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
?>
<script>
   
$(document).ready(function(){
    $(".advance_Search").click(function(){
        alert();
        $("p").hide();
    });
    $("#show").click(function(){
        $("p").show();
    });
});
</script>
</script>