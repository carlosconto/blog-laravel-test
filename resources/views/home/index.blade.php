@extends('layout.master')


@section('content')
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row">

                        @foreach ($news as $new)
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <article class="post-grid mb-5 ">
                                    <a class="post-thumb mb-4 d-block" href="{{ route('article.show', $new->getSource()->getId()) }}">
                                        <img src="{{ $new->getUrlToImage() ?? asset('images/news/news-1.jpg') }}"
                                            alt="" class="img-fluid w-100" height="350">
                                    </a>

                                    <div class="post-content-grid">
                                        <div class="label-date">
                                            <span class="day">
                                                {{ \Carbon\Carbon::parse($new->getPublishedAt())->format('d') }}
                                            </span>
                                            <span class="month text-uppercase">
                                                {{ \Carbon\Carbon::parse($new->getPublishedAt())->format('M') }}
                                            </span>
                                        </div>
                                        <span class="cat-name text-color font-extra font-sm text-uppercase letter-spacing">
											{{ $new->getAuthor()->getName() }}
                                        </span>
                                        <h3 class="post-title mt-1">
                                            <a href="{{ route('article.show', $new->getSource()->getId()) }}">
                                                {{ $new->getTitle() }}
                                            </a>
                                        </h3>
                                        <p>
                                            {{ $new->getDescription() }}
                                        </p>
                                    </div>
                                </article>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="m-auto">
					{{ $news->links('vendor.pagination.bootstrap-4') }}                 
                </div>
            </div>
        </div>
    </section>
@endsection
