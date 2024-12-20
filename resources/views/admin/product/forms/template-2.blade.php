@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


<form class="row g-3" method="POST" enctype="multipart/form-data" action="{{ route('product.store') }}">
    @csrf
    <input type="hidden" name="template_id" value="{{$templates->id}}" />
    <div class="col-md-12">
        <label for="productName" class="form-label">Product Name</label>
        <div class="input-group">
            <span class="input-group-text"><i class='bx bx-user'></i></span>
            <input type="text" class="form-control" id="productName" name="name" value="{{ old('name') }}">
        </div>
        @error('name')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <!-- First Section Header Title -->

    <div class="col-md-12">
        <label for="header_title" class="form-label">Header Title</label>
        <div class="input-group">
            <span class="input-group-text"><i class='bx bx-user'></i></span>
            <input type="text" class="form-control" id="header_title" name="header_title" value="{{ old('header_title') }}">
        </div>
        @error('header_title')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="col-md-12">
        <label for="code" class="form-label">Product Code</label>
        <div class="input-group">
            <span class="input-group-text"><i class='bx bx-lock-alt'></i></span>
            <input type="text" class="form-control" id="code" name="code" value="{{ old('code') }}">
        </div>
        @error('code')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <!-- Video Section with Toggle Option -->
    <div class="col-md-12">
        <label for="video_option" class="form-label">Choose Video Option</label>
        <select class="form-control" id="video_option" onchange="toggleVideoInput()">
            <option value="">Select Option</option>
            <option value="url">Video URL</option>
            <option value="file">Upload Video File</option>
        </select>
    </div>
    <div class="col-md-12" id="video_url_input" style="display: none;">
        <label for="video_url" class="form-label">Video URL</label>
        <input type="text" name="video_url" class="form-control" id="video_url" value="{{ old('video_url') }}">
        @error('video_url')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="col-md-12" id="video_file_input" style="display: none;">
        <label for="video_file" class="form-label">Upload Video File</label>
        <input type="file" name="video" class="form-control" id="video_file">
        @error('video_file')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>



    
    <div class="col-md-4">
        <label for="price" class="form-label">Price</label>
        <div class="input-group">
            <span class="input-group-text"><i class='bx bx-user'></i></span>
            <input type="number" class="form-control" id="price" name="price" value="{{ old('price') }}">
        </div>
        @error('price')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="col-md-4">
        <label for="previousPrice" class="form-label">Previous Price</label>
        <div class="input-group">
            <span class="input-group-text"><i class='bx bx-envelope'></i></span>
            <input type="number" class="form-control" id="previousPrice" name="previous_price" value="{{ old('previous_price') }}">
        </div>
        @error('previous_price')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="col-md-4">
        <label for="quantity" class="form-label">Quantity</label>
        <div class="input-group">
            <span class="input-group-text"><i class='bx bx-envelope'></i></span>
            <input type="number" class="form-control" id="quantity" name="quantity" value="{{ old('quantity') }}">
        </div>
        @error('quantity')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>



    <!-- FAQ Section -->

    <div class="col-md-12">
        <label for="faq_section_title" class="form-label">FAQ Section Title</label>
        <input type="text" class="form-control" id="faq_section_title" name="faq_section_title" value="{{ old('faq_section_title') }}">
        @error('faq_section_title')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div id="faqContainer">
        <div class="faq-item">
            <div class="col-md-12">
                <label class="form-label">FAQ Question</label>
                <input type="text" class="form-control" name="faq_questions[]" placeholder="Enter FAQ Question">
            </div>
            <div class="col-md-12">
                <label class="form-label">FAQ Answer</label>
                <textarea class="form-control" name="faq_answers[]" placeholder="Enter FAQ Answer"></textarea>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <button type="button" class="btn btn-primary btn-sm px-3" onclick="addFaq()">+ Add FAQ</button>
    </div>



    <!-- Third Section (Optional) -->

    <div class="col-md-12">
        <label for="section_title" class="form-label">Section Title</label>
        <div class="input-group">
            <span class="input-group-text"><i class='bx bx-user'></i></span>
            <input type="text" class="form-control" id="section_title" name="section_title" value="{{ old('name') }}">
        </div>
        @error('section_title')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="col-md-12">
        <label for="product_description" class="form-label">Product Description</label>
        <textarea class="summernote" id="product_description" name="product_description">{{ old('product_description') }}</textarea>
        @error('product_description')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="col-md-12">
        <label for="featured_image" class="form-label">Product Image</label>
        <div class="input-group">
            <span class="input-group-text"><i class='bx bx-user'></i></span>
            <input type="file" class="form-control" id="featured_image" name="featured_image" value="{{ old('featured_image') }}">
        </div>
        @error('featured_image')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <!-- Review Section -->

    <div class="col-md-12">
        <button type="button" class="btn btn-primary btn-sm px-3" onclick="addReview()">+ Add Review Image</button>
    </div>
    <div id="reviewContainer">
        <div class="review-item">
            <div class="col-md-12">
                <label class="form-label">Review Image</label>
                <input type="file" class="form-control" name="review_images[]" accept="image/*">

                @error('review_images')
                <span class="text-danger">{{ $message }}</span>
                @enderror

            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>

    <!-- JavaScript to Manage Dynamic Fields and Toggle Video Input -->
    <script>
        function toggleVideoInput() {
            const option = document.getElementById('video_option').value;
            document.getElementById('video_url_input').style.display = option === 'url' ? 'block' : 'none';
            document.getElementById('video_file_input').style.display = option === 'file' ? 'block' : 'none';
        }

        function addFaq() {
            const faqContainer = document.getElementById('faqContainer');
            const newFaq = document.createElement('div');
            newFaq.classList.add('faq-item');
            newFaq.innerHTML = `
                <div class="col-md-12">
                    <label class="form-label">FAQ Question</label>
                    <input type="text" class="form-control" name="faq_questions[]" placeholder="Enter FAQ Question">
                </div>
                <div class="col-md-12">
                    <label class="form-label">FAQ Answer</label>
                    <textarea class="form-control" name="faq_answers[]" placeholder="Enter FAQ Answer"></textarea>
                </div>
            `;
            faqContainer.appendChild(newFaq);
        }
    </script>
    <script>
        function addReview() {
            const reviewContainer = document.getElementById('reviewContainer');
            const newReview = document.createElement('div');
            newReview.classList.add('review-item');
            newReview.innerHTML = `
            <div class="col-md-12">
                <label class="form-label">Review Image</label>
                <input type="file" class="form-control" name="review_images[]" accept="image/*">
            </div>
        `;
            reviewContainer.appendChild(newReview);
        }
    </script>

</form>