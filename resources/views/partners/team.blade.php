@component('layouts.partners')

<section class="my-5">
    <div class="container">
        <div class="text-center">
            <span style="background: black; padding: 0px 20px; color: white; font-size: 40px">
                Team
            </span>
        </div>
        <br><br>

        <div style="padding: 0 100px" class="text-center">
            <p>
                We are a young, energetic and creative team, dedicated to initiating positive change and growth in our community. Our passion for equality, social justice and development are reflected in the projects we choose to embark on, as well as our internal organizational policies. 
            </p>
        </div>

        <br><br>

        <div class="text-center">
            <h3 style="color: #6C412E; text-decoration: underline">Co Founders</h3>
            <br><br>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 text-center">
                <img src="{{ asset('assets/images/team/iantarimo.jpg') }}" class="rounded-circle" alt="..." style="max-width: 200px">
                <br><br>
                <h4 style="font-size: 20px">Ian Tarimo</h4> <br>
                <br>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 text-center">
                <img src="{{ asset('assets/images/team/gwamaka.jpg') }}" alt="..." class="rounded-circle" style="max-width: 200px">
                <br><br>
                <h4 style="font-size: 20px">Gwamaka Mwabuka </h4> <br>
                <br>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 text-center">
                <img src="{{ asset('assets/images/team/haule.jpeg') }}" alt="..." class="rounded-circle" style="max-width: 200px">
                <br><br>
                <h4 style="font-size: 20px">Alphonce Haule </h4> <br>
                <br>
            </div>
        </div>
        
        <div class="row my-5">
            <div class="col-md-3 text-center mb-5">
                <img src="{{ asset('assets/images/team/debora.jpg') }}" alt="..." class="rounded-circle" style="max-width: 180px">
                <br><br>
                <h5>Debora Mboya</h5>
                <p style="font-size: 15px; margin-top: 10px; font-style: italic">Head of Operations & Programs</p> 
            </div>

            <div class="col-md-3 text-center mb-5">
                <img src="{{ asset('assets/images/team/magreth.jpg') }}" alt="..." class="rounded-circle" style="max-width: 180px">
                <br><br>
                <h5>Magreth Mwambete</h5>
                <p style="font-size: 15px; margin-top: 10px; font-style: italic">Human Resources Manager</p> 
            </div>

            <div class="col-md-3 text-center mb-5">
                <img src="{{ asset('assets/images/team/mariam.jpeg') }}" alt="..." class="rounded-circle" style="max-width: 180px">
                <br><br>
                <h5>Mariam Mhina</h5>
                <p style="font-size: 15px; margin-top: 10px; font-style: italic">Communications & Partnerships Manager</p> 
            </div>

            <div class="col-md-3 text-center mb-5">
                <img src="{{ asset('assets/images/team/mustapha.jpg') }}" alt="..." class="rounded-circle" style="max-width: 180px">
                <br><br>
                <h5>Mustapha Juma</h5>
                <p style="font-size: 15px; margin-top: 10px; font-style: italic">Finance Manager</p> 
            </div>

            <div class="col-md-3 text-center">
                <img src="{{ asset('assets/images/team/ellison.jpg') }}" alt="..." class="rounded-circle" style="max-width: 180px">
                <br><br>
                <h5>Ellison Nsigaye</h5>
                <p style="font-size: 15px; margin-top: 10px; font-style: italic">Pre - Production Coordinator</p> 
            </div>

            <div class="col-md-3 text-center">
                <img src="{{ asset('assets/images/team/gloria.jpg') }}" alt="..." class="rounded-circle" style="max-width: 180px">
                <br><br>
                <h5>Gloria Shio</h5>
                <p style="font-size: 15px; margin-top: 10px; font-style: italic">Resource Mobilization</p> 
            </div>

            <div class="col-md-3 text-center">
                <img src="{{ asset('assets/images/team/joseph.jpg') }}" alt="..." class="rounded-circle" style="max-width: 180px">
                <br><br>
                <h5>Joseph Modest</h5>
                <p style="font-size: 15px; margin-top: 10px; font-style: italic">3D Animator</p> 
            </div>

        </div>

        
        <div class="mt-5 text-center">
            <h3 style="color: #6C412E;text-decoration: underline">Interns</h3>
            <br><br>
        </div>
        <div class="row">
            <div class="col-md-3 text-center">
                <img src="{{ asset('assets/images/tailogoimage.png') }}" alt="..." style="max-width: 150px">
                <br><br>
                <h5>Dianne Charles</h5>
            </div>
            <div class="col-md-3 text-center">
                <img src="{{ asset('assets/images/tailogoimage.png') }}" alt="..." style="max-width: 150px">
                <br><br>
                <h5>Mariam Mintanga</h5>
            </div>
            <div class="col-md-3 text-center">
                <img src="{{ asset('assets/images/tailogoimage.png') }}" alt="..." style="max-width: 150px">
                <br><br>
                <h5>Rose Kudema</h5>
            </div>
            <div class="col-md-3 text-center">
                <img src="{{ asset('assets/images/tailogoimage.png') }}" alt="..." style="max-width: 150px">
                <br><br>
                <h5>Damas Donald</h5>
            </div>
        </div>

    </div>
</section>

@endcomponent