<!-- This is the home page -->


<!-- Calling component 'layout' -->
<x-layout>

    <!-- Calling name slot in the component called 'title'  -->
    <x-slot name='title'>Home</x-slot>

    <!-- Calling name slot in the component called 'content'  -->
    <x-slot name='content'>

        <!-- Body of the homepage or home view-->
        <div class="mt-5">
            <div class="text-center">
                <img src="{{asset('images/profile.jpg')}}" alt="" class="img-thumbnail" width="200px" height="100px">
            </div>
            <div class="mt-5 text-white text-justify mx=5">
                <h1 class="fw-bold st-font">Hello,</h1>
                <div class="px-4" style="line-height: 2rem;">
                    <p style="text-indent: 100px;">I am <b class="text-warning">Syal Khan</b> having 5 years of full stack web development experience for global businesses, I offer the technical expertise
                        your are seeking for your web developer position</p>
                    <p>Since earning my bachloer's degree in internet and web development from Comsats University.Since earning my bachloer's degree in internet and web development from Comsats University
                        Since earning my bachloer's degree in internet and web development from Comsats University </p>
                </div>
            </div>
            <div class="text-center">
                <a href="{{route('contact')}}" class="btn btn-outline-warning mx-5 my-3">Hire Me</a>
                <a href="{{route('contact')}}" class="btn btn-outline-info">Contact</a>
            </div>

    </x-slot>
</x-layout>