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
                                Education Scholarship Program Launched.Harakati Za Ngeti Animated Series which has helped in
                                 raising awareness and changing mindsets about Sexual Reproductive Health, Gender-Based Violence (GBV)
                                  and other various issues which derail a young person’s academic journey, 
                                  was found to be an effective tool to fight these challenges.</p>
                        </div>
                    </li>
                    <!-- Single Experience -->
                    <li>
                        <div class="timeline_content">
                            <span>2018</span>
                            <h4>Naweza Animation Launched</h4>
                            <p>Partnering up with the Tanzanian Government, and organizations like the UNFPA, UNESCO, UN Women
                                 and KOICA Tanzania, helped in taking steps forward to reduce child marriage.
                                  Child marriage is against human rights and we can protect our young girls 
                                  who can move mountains from being held back as great leaders and change-makers they truly are.</p>
                        </div>
                    </li>
                    <!-- Single Experience -->
                    <li>
                        <div class="timeline_content">
                            <span>2019</span>
                            <h4>Darubini Project Launched</h4>
                            <p>Darubini Project first funded by Foundation For Covil Society & Partnership with Segal
                                Family Foundation. Darubini Project aims to address Sexual and Reproductive Health issues
                                 facing adolescents such as puberty, early sexual activities, intergenerational sex,
                                  teenage pregnancy, child and forced marriage, gender-based violence (GBV) et.c.
                                   that prevent young people, especially girls from accessing education.</p>
                        </div>
                    </li>
                    <li>
                        <div class="timeline_content">
                            <span>2020</span>
                            <h4>Mwangaza Series & Chapa Magonjwa Series Launched</h4>
                            <p>Projects with UNESCO, UNICEF USA, UNFPA & USADF with the launch of Mwangaza Series &
                                Chapa Magonjwa Series.Tai Tanzania adeptly fashioned an animated film NIVUSHE as a part of our Mwangaza Series 
                                (an animation series with key focus on people living with disabilities) to create awareness
                                 about the challenges that affect people with disabilities in order to decrease negative
                                  attitude and stigma towards people living with disabilities in Tanzania.</p>
                        </div>
                    </li>
                    <li>
                        <div class="timeline_content">
                            <span>2021</span>
                            <h4>11 animations produced</h4>
                            <p>Projects with UNFPA, HDIF & Partnership David Weekly Foundation with 11 animations
                                produced.Writing compelling human-centred narratives and presenting them in form of 3D animations,
                                 comic strip posters and radio plays with the aim of encouraging positive social behavioural change. </p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

{{-- end of history--}}

@endcomponent
