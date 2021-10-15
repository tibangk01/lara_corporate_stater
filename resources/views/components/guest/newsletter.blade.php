<div class="footer-newsletter">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6">
            @if ($sitePage)
                <h4>{{ $sitePage->section->title }}</h4>
                <p>{{ $sitePage->section->description }}</p>
            @endif

          <form action="{{ route('newsletter') }}" method="post" id="newsletter_form">
            @csrf
            <input type="email" name="email">
            <input type="submit" value="Subscribe">
        </form>
        <div class="my-3">
            <span class="text-danger error-text email_error"></span>
            <div id="newsletter"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
