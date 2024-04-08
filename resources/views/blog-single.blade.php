@extends('Layouts.app')

@section('title')
    Make An Appoinment
@endsection

@section('content')
    <section class="page-title bg-1">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block text-center">
                        <span class="text-white">News details</span>
                        <h1 class="text-capitalize mb-5 text-lg">Blog Single</h1>

                        <!-- <ul class="list-inline breadcumb-nav">
                                                                                <li class="list-inline-item"><a href="index.html" class="text-white">Home</a></li>
                                                                                <li class="list-inline-item"><span class="text-white">/</span></li>
                                                                                <li class="list-inline-item"><a href="#" class="text-white-50">News details</a></li>
                                                                              </ul> -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section blog-wrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-lg-12 mb-5">
                            <div class="single-blog-item">
                                <img src="images/blog/blog-1.jpg" alt="" class="img-fluid">

                                <div class="blog-item-content mt-5">
                                    <div class="blog-item-meta mb-3">
                                        <span class="text-color-2 text-capitalize mr-3"><i
                                                class="icofont-book-mark mr-2"></i> Equipment</span>
                                        <span class="text-muted text-capitalize mr-3"><i class="icofont-comment mr-2"></i>5
                                            Comments</span>
                                        <span class="text-black text-capitalize mr-3"><i
                                                class="icofont-calendar mr-2"></i>{{ $blog->created_at->format('jS F') }}</span>
                                    </div>

                                    <h2 class="mb-4 text-md">{{ $blog->title }}
                                    </h2>

                                    <p class="lead mb-4">Non illo quas blanditiis repellendus laboriosam minima animi.
                                        Consectetur accusantium
                                        pariatur repudiandae!</p>

                                    <p>{{ $blog->content }}</p>

                                    <blockquote class="quote">
                                        A brand for a company is like a reputation for a person. You earn reputation by
                                        trying to do hard things well.
                                    </blockquote>


                                    <p class="lead mb-4 font-weight-normal text-black">The same is true as we experience the
                                        emotional sensation of
                                        stress from our first instances of social rejection ridicule. We quickly learn to
                                        fear and thus automatically.
                                    </p>

                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste, rerum beatae repellat
                                        tenetur incidunt
                                        quisquam libero dolores laudantium. Nesciunt quis itaque quidem, voluptatem autem
                                        eos animi laborum iusto
                                        expedita sapiente.</p>

                                    <div class="mt-5 clearfix">
                                        <ul class="float-left list-inline tag-option">
                                            <li class="list-inline-item"><a href="#!">Advancher</a></li>
                                            <li class="list-inline-item"><a href="#!">Landscape</a></li>
                                            <li class="list-inline-item"><a href="#!">Travel</a></li>
                                        </ul>

                                        <ul class="float-right list-inline">
                                            <li class="list-inline-item"> Share: </li>
                                            <li class="list-inline-item"><a href="#!"><i
                                                        class="icofont-facebook"></i></a></li>
                                            <li class="list-inline-item"><a href="#!"><i
                                                        class="icofont-twitter"></i></a></li>
                                            <li class="list-inline-item"><a href="#!"><i
                                                        class="icofont-pinterest"></i></a></li>
                                            <li class="list-inline-item"><a href="#!"><i
                                                        class="icofont-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="comment-area mt-4 mb-5">
                                <h4 class="mb-4">{{ $blog->comments()->count() }} Comments on Healthy environment... </h4>
                                <ul class="comment-tree list-unstyled">
                                    @foreach ($blog->comments as $comment)
                                        <li class="mb-5">
                                            <div class="comment-area-box d-block d-sm-flex">
                                                <div class="comment-thumb">
                                                    <img alt=""
                                                        src="{{ asset('assets/images/blog/testimonial1.jpg') }}"
                                                        style="width: 70px">
                                                </div>

                                                <div class="block">
                                                    <div class="comment-info">
                                                        <h5 class="mb-1">{{ $comment->username }}</h5>
                                                        <span class="date-comm">| Posted
                                                            {{ $comment->created_at->format('jS F') }}</span>
                                                    </div>


                                                    <div class="comment-content mt-3">
                                                        <p>{{ $comment->comment_text }} </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>


                        <div class="col-lg-12">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form action="{{ route('comment.store', $blog->id) }}" method="POST" class="comment-form my-5"
                                id="comment-form">
                                @csrf
                                <h4 class="mb-4">Write a comment</h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input class="form-control" type="text" name="name" id="name"
                                                placeholder="Name:">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input class="form-control" type="text" name="mail" id="mail"
                                                placeholder="Email:">
                                        </div>
                                    </div>
                                </div>


                                <textarea class="form-control mb-4" name="comment" id="comment" cols="30" rows="5"
                                    placeholder="Comment"></textarea>

                                <input class="btn btn-main-2 btn-round-full" type="submit" name="submit-contact"
                                    id="submit_contact" value="Submit Message">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    

                        <div class="sidebar-widget category mb-3">
                            <h5 class="mb-4">Categories</h5>

                            <ul class="list-unstyled">
                                <li class="align-items-center">
                                    <a href="#">Medicine</a>
                                    <span>(14)</span>
                                </li>
                                <li class="align-items-center">
                                    <a href="#">Equipments</a>
                                    <span>(2)</span>
                                </li>
                                <li class="align-items-center">
                                    <a href="#">Heart</a>
                                    <span>(10)</span>
                                </li>
                                <li class="align-items-center">
                                    <a href="#">Free counselling</a>
                                    <span>(5)</span>
                                </li>
                                <li class="align-items-center">
                                    <a href="#">Lab test</a>
                                    <span>(5)</span>
                                </li>
                            </ul>
                        </div>

                        <div class="sidebar-widget schedule-widget mb-3">
                            <h5 class="mb-4">Time Schedule</h5>

                            <ul class="list-unstyled">
                                <li class="d-flex justify-content-between align-items-center">
                                    <span>Monday - Friday</span>
                                    <span>9:00 - 17:00</span>
                                </li>
                                <li class="d-flex justify-content-between align-items-center">
                                    <span>Saturday</span>
                                    <span>9:00 - 16:00</span>
                                </li>
                                <li class="d-flex justify-content-between align-items-center">
                                    <span>Sunday</span>
                                    <span>Closed</span>
                                </li>
                            </ul>

                            <div class="sidebar-contatct-info mt-4">
                                <p class="mb-0">Need Urgent Help?</p>
                                <h3>+23-4565-65768</h3>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
