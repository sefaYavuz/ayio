@extends('admin::layouts.default')
@section('content')

    <section class="hero is-small">
        <div class="column">
      <!-- Hero content: will be in the middle -->
      <div class="hero-body">
        <div class="container">
          <h1 class="title">
            Admin Dashboard
          </h1>
          <h2 class="subtitle">
            A simple admin template
          </h2>
        </div>
      </div>

      <!-- Hero footer: will stick at the bottom -->
      <div class="hero-foot">
        <nav class="level">
          <div class="level-item has-text-centered">
            <p class="heading">Tweets</p>
            <p class="title">3,456</p>
          </div>
          <div class="level-item has-text-centered">
            <p class="heading">Following</p>
            <p class="title">123</p>
          </div>
          <div class="level-item has-text-centered">
            <p class="heading">Followers</p>
            <p class="title">456K</p>
          </div>
          <div class="level-item has-text-centered">
            <p class="heading">Likes</p>
            <p class="title">789</p>
          </div>
        </nav>
      </div>
    </section>
    <section class="section">

    </section>
    </div>
  </div>
  </div>
</section>
@endsection
