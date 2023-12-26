<!-- This is the skills page -->

<!-- Calling component 'layout' -->
<x-layout>

    <!-- Calling name slot in the component called 'title'  -->
    <x-slot name='title'>Skills</x-slot>

    <!-- Calling name slot in the component called 'content'  -->
    <x-slot name='content'>
        <div class="container mt-5">
            <h2 class="mb-4">Web Developer Skills</h2>

            <div class="row">
                <div class="col-md-4">
                    <div class="skill-card">
                        <div class="skill-card-body text-center">
                            <i class="fab fa-html5 skill-icon"></i>
                            <h5 class="card-title">HTML5</h5>
                            <p class="card-text">Semantic markup for building the structure of web pages.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="skill-card">
                        <div class="skill-card-body text-center">
                            <i class="fab fa-css3-alt skill-icon"></i>
                            <h5 class="card-title">CSS3</h5>
                            <p class="card-text">Styling and layout to enhance the presentation of web pages.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="skill-card">
                        <div class="skill-card-body text-center">
                            <i class="fab fa-js-square skill-icon"></i>
                            <h5 class="card-title">JavaScript</h5>
                            <p class="card-text">Dynamic and interactive features for web applications.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Add more skill cards as needed -->

        </div>

    </x-slot>
</x-layout>