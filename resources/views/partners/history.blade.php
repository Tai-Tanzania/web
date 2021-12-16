@component('layouts.partners')

{{-- beginning of history--}}

<style>
    .pt-100 {
        padding-top: 100px;
    }

    .pb-100 {
        padding-bottom: 100px;
    }

    .section-title {
        margin-bottom: 60px;
    }

    .section-title p {
        color: #777;
        font-size: 16px;
    }

    .section-title h4 {
        text-transform: capitalize;
        font-size: 40px;
        position: relative;
        padding-bottom: 20px;
        margin-bottom: 20px;
        font-weight: 600;
    }

    .section-title h4:before {
        position: absolute;
        content: "";
        width: 60px;
        height: 2px;
        background-color: #6c4130;
        bottom: 0;
        left: 50%;
        margin-left: -30px;
    }

    .section-title h4:after {
        position: absolute;
        background-color: #6c4130;
        content: "";
        width: 10px;
        height: 10px;
        bottom: -4px;
        left: 50%;
        margin-left: -5px;
        border-radius: 50%;
    }

    ul.timeline-list {
        position: relative;
        margin: 0;
        padding: 0
    }

    ul.timeline-list:before {
        position: absolute;
        content: "";
        width: 2px;
        height: 100%;
        background-color: #6c4130;
        left: 50%;
        top: 0;
        -webkit-transform: translateX(-50%);
        transform: translateX(-50%);
    }

    ul.timeline-list li {
        position: relative;
        clear: both;
        display: table;
    }

    .timeline_content {
        border: 2px solid #6c4130;
        background-color: #fff
    }

    ul.timeline-list li .timeline_content {
        width: 45%;
        color: #333;
        padding: 30px;
        float: left;
        text-align: right;
    }

    ul.timeline-list li:nth-child(2n) .timeline_content {
        float: right;
        text-align: left;
    }

    .timeline_content h4 {
        font-size: 22px;
        font-weight: 600;
        margin: 10px 0;
    }

    ul.timeline-list li:before {
        position: absolute;
        content: "";
        width: 25px;
        height: 25px;
        background-color: #6c4130;
        left: 50%;
        top: 50%;
        -webkit-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        border-radius: 50%;
    }

    .timeline_content span {
        font-size: 18px;
        font-weight: 500;
        font-family: poppins;
        color: #6c4130;
    }

</style>

<section class="experience pt-100 pb-100" id="experience">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 mx-auto text-center">
                <div class="section-title">
                    <span style="background: black; padding: 0px 20px; color: white; font-size: 40px">Our History</span>
                    <br><br>
                    <p style="color: white">A brief history of our company</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <ul class="timeline-list">
                    <!-- Single Experience -->
                    <li>
                        <div class="timeline_content">
                            <span>2012 - 2013</span>
                            <h4>Beginnings</h4>
                            <p>
                                Tai Tanzania was started in 2012 and registered 2013 (Reg: ooNGO/00009751). The goal was
                                to build an animation studio with specialization in 3D graphics and comics.
                            </p>
                        </div>
                    </li>
                    <!-- Single Experience -->
                    <li>
                        <div class="timeline_content">
                            <span>2017</span>
                            <h4>Harakati za Ngeti Launched</h4>
                            <p>Harakati za Ngeti; First Animation through the Amua Accelerator funded by UNFPA &
                                Education Scholarship Program Launched. Lorem ipsum dolor sit amet consectetur,
                                adipisicing elit. Fugit aut sapiente sequi distinctio laboriosam odio inventore
                                excepturi eaque, ad nemo quis natus dicta autem! Nobis laudantium tempore aliquid id?
                                Modi!</p>
                        </div>
                    </li>
                    <!-- Single Experience -->
                    <li>
                        <div class="timeline_content">
                            <span>2018</span>
                            <h4>Nawaza Animation Launched</h4>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cumque nesciunt quaerat quis
                                laudantium nemo consectetur. Architecto perspiciatis esse pariatur quod voluptates
                                labore cum quas veniam omnis, vero laboriosam obcaecati rem.</p>
                        </div>
                    </li>
                    <!-- Single Experience -->
                    <li>
                        <div class="timeline_content">
                            <span>2019</span>
                            <h4>Darubini Project Launched</h4>
                            <p>Darubini Project first funded by Foundation For Covil Society & Partnership with Segal
                                Family Foundation. Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias
                                perspiciatis laboriosam iste consequatur perferendis minima ipsum nulla sint earum esse.
                                Non excepturi rem cumque vitae rerum deserunt dolorem nihil quidem.</p>
                        </div>
                    </li>
                    <li>
                        <div class="timeline_content">
                            <span>2020</span>
                            <h4>Mwangaza Series & Chapa Magonjwa Series Launched</h4>
                            <p>Projects with UNESCO, UNICEF USA, UNFPA & USADF with the launch of Mwangaza Series &
                                Chapa Magonjwa Series. Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias
                                perspiciatis laboriosam iste consequatur perferendis minima ipsum nulla sint earum esse.
                                Non excepturi rem cumque vitae rerum deserunt dolorem nihil quidem.</p>
                        </div>
                    </li>
                    <li>
                        <div class="timeline_content">
                            <span>2021</span>
                            <h4>11 animations produced</h4>
                            <p>Projects with UNFPA, HDIF & Partnership David Weekly Foundation with 11 animations
                                produced. Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias perspiciatis
                                laboriosam iste consequatur perferendis minima ipsum nulla sint earum esse. Non
                                excepturi rem cumque vitae rerum deserunt dolorem nihil quidem.</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

{{-- end of history--}}

@endcomponent
