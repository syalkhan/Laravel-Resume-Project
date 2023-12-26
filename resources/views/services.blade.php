<!-- Services -->

<!-- Calling name slot in the component called 'title'  -->
<x-layout>

    <!-- Calling name slot in the component called 'content'  -->
    <x-slot name='title'>Services</x-slot>
    <x-slot name='content'>
        <div class="container mt-5">
            <h2 class="mb-4">Web Development Services</h2>

            <div class="row">
                <div class="col-md-4">
                    <div class="service-card">
                        <div class="service-card-body text-center">
                            <i class="fas fa-paint-brush fa-3x mb-3"></i>
                            <h5 class="card-title">Web Design</h5>
                            <p class="card-text">We create modern and visually appealing designs that engage your audience.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="service-card">
                        <div class="service-card-body text-center">
                            <i class="fas fa-code fa-3x mb-3"></i>
                            <h5 class="card-title">Web Development</h5>
                            <p class="card-text">Our experienced developers build responsive and efficient websites and web applications.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="service-card">
                        <div class="service-card-body text-center">
                            <i class="fas fa-shopping-cart fa-3x mb-3"></i>
                            <h5 class="card-title">E-commerce Development</h5>
                            <p class="card-text">We create secure and user-friendly online stores to boost your business.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Add more service cards as needed -->

        </div>
    </x-slot>
</x-layout>