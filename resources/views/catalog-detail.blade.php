@extends('layouts.app')

@section('content')

<!--==================================================-->
<!-- Back Arrow -->
<!--==================================================-->
<div class="container mt-4">
    <a href="{{ url('/catalog') }}" class="back-arrow">
        <i class="bi bi-arrow-left-circle-fill"></i> Back to Catalog
    </a>
</div>

<!--==================================================-->
<!-- PRODUCT DETAIL SECTION-->
<!--==================================================-->

<section class="product-detail-section">
    <div class="container">
        <div class="row align-items-center">

            <!-- LEFT: PRODUCT IMAGE -->
            <div class="col-lg-6">
                <div class="product-image">
                    <img src="{{ asset($product->image) }}" alt="{{ $product->name }}">
                </div>
            </div>

            <!-- RIGHT: PRODUCT INFO -->
            <div class="col-lg-6">
                <div class="product-info">
                    <h1>{{ $product->name }}</h1>

                    <p class="short-desc">
                        {{ $product->description }}
                    </p>

                    <div class="product-badges">
                        <span>CE Certified</span>
                        <span>ISO Approved</span>
                        <span>2 Years Warranty</span>
                    </div>

                    <div class="product-buttons">
                        <a href="#" class="btn-primary-custom">Request Quotation</a>
                        <a href="#" class="btn-outline-custom">Download Brochure</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!--==================================================-->
<!-- SPECIFICATION -->
<!--==================================================-->
<section class="product-specs">
    <div class="container">
        <h2 class="section-title">Detailed Specifications</h2>

        <table class="spec-table">
            <thead>
                <tr>
                    <th>Specification</th>
                    <th>Details</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Display</td>
                    <td>{{ $product->display }}</td>
                </tr>
                <tr>
                    <td>Power Supply</td>
                    <td>{{ $product->power }}</td>
                </tr>
                <tr>
                    <td>Connectivity</td>
                    <td>{{ $product->connectivity }}</td>
                </tr>
                <tr>
                    <td>Measurement Range</td>
                    <td>{{ $product->measurement_range }}</td>
                </tr>
                <tr>
                    <td>Accuracy</td>
                    <td>{{ $product->accuracy }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</section>


<!--==================================================-->
<!-- FEATURES -->
<!--==================================================-->
<section class="product-features">
    <div class="container">
        <h2 class="section-title">Product Features</h2>

        <ul>
            <li>Real-time monitoring system</li>
            <li>Compact and portable design</li>
            <li>High precision sensor technology</li>
            <li>User-friendly interface</li>
            <li>Suitable for ICU and emergency rooms</li>
        </ul>
    </div>
</section>

<!--==================================================-->
<!-- APPLICATION -->
<!--==================================================-->

<section class="product-application">
    <div class="container">
        <h2 class="section-title">Applications / Usage</h2>

        <p class="mb-3">Recommended For:</p>

        <ul class="application-list">
            <li>Hospitals</li>
            <li>Clinics</li>
            <li>Emergency Units</li>
            <li>Diagnostic Centers</li>
        </ul>
    </div>
</section>

<!--==================================================-->
<!-- CERTIFICATION -->
<!--==================================================-->

<section class="product-certification">
    <div class="container">
        <h2 class="section-title">Certification & Compliance</h2>

        <div class="cert-badges">
            <span>CE Certified</span>
            <span>ISO 13485 Standard</span>
            <span>FDA Approved</span>
        </div>
    </div>
</section>

<!--==================================================-->
<!-- SAFETY -->
<!--==================================================-->

<section class="product-safety">
    <div class="container">
        <h2 class="section-title">Safety & Warranty Information</h2>

        <p>
            This product complies with international medical safety standards 
            and includes a 24-month manufacturer warranty.
        </p>
    </div>
</section>

<!--==================================================-->
<!-- CTA -->
<!--==================================================-->

<section class="product-cta">
    <div class="container text-center">
        <h2>Need More Information About This Product?</h2>

        <div class="cta-buttons">
            <a href="#" class="btn-white">Contact Sales</a>
            <a href="#" class="btn-outline-white">Request Custom Quotation</a>
        </div>
    </div>
</section>

@endsection
