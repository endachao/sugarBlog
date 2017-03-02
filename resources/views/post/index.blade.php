@extends('layouts.backend')

@section('content')
    <article class="content items-list-page">
        <div class="title-search-block">
            <div class="title-block">
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="title"> 文章列表 <a href="{{ route('post.create') }}" class="btn btn-primary btn-sm rounded-s">
                                撰写新文章
                            </a>
                            <div class="action dropdown">
                                <button class="btn  btn-sm rounded-s btn-secondary dropdown-toggle" type="button"
                                        id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                    More actions...
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenu1"><a class="dropdown-item"
                                                                                              href="#"><i
                                                class="fa fa-pencil-square-o icon"></i>Mark as a draft</a> <a
                                            class="dropdown-item" href="#" data-toggle="modal"
                                            data-target="#confirm-modal"><i class="fa fa-close icon"></i>Delete</a>
                                </div>
                            </div>
                        </h3>
                        <p class="title-description"> 包含所有文章 </p>
                    </div>
                </div>
            </div>
            <div class="items-search">
                <form class="form-inline">
                    <div class="input-group">
                        <input type="text" class="form-control boxed rounded-s" placeholder="Search for...">
                        <span class="input-group-btn">
                            <button class="btn btn-secondary rounded-s" type="button">
                                <i class="fa fa-search"></i>
                            </button>
				        </span>
                    </div>
                </form>
            </div>
        </div>
        <div class="card items">
            <ul class="item-list striped">
                <li class="item item-list-header hidden-sm-down">
                    <div class="item-row">
                        <div class="item-col fixed item-col-check"><label class="item-check" id="select-all-items">
                                <input type="checkbox" class="checkbox">
                                <span></span>
                            </label></div>
                        <div class="item-col item-col-header item-col-title">
                            <div><span>标题</span></div>
                        </div>
                        <div class="item-col item-col-header item-col-category">
                            <div class="no-overflow"><span>分类</span></div>
                        </div>
                        <div class="item-col item-col-header item-col-date">
                            <div><span>发布</span></div>
                        </div>
                        <div class="item-col item-col-header item-col-sales">
                            <div><span>创建时间</span></div>
                        </div>
                        <div class="item-col item-col-header fixed item-col-actions-dropdown"></div>
                    </div>
                </li>
                @foreach($posts as $post)
                <li class="item">
                    <div class="item-row">
                        <div class="item-col fixed item-col-check"><label class="item-check" id="select-all-items">
                                <input type="checkbox" class="checkbox">
                                <span></span>
                            </label></div>
                        <div class="item-col fixed pull-left item-col-title">
                            <div class="item-heading">Name</div>
                            <div>
                                <a href="{{ route('post.edit', ['post' => $post->id]) }}" class="">
                                    <h4 class="item-title"> {{ $post->title }} </h4>
                                </a>
                            </div>
                        </div>
                        <div class="item-col item-col-category no-overflow">
                            <div class="item-heading">Category</div>
                            <div class="no-overflow"><a href="">Hardware</a></div>
                        </div>
                        <div class="item-col item-col-date">
                            <div class="item-heading">Published</div>
                            <div class="no-overflow"> 是</div>
                        </div>
                        <div class="item-col item-col-date">
                            <div class="no-overflow"> {{ $post->created_at->diffForHumans() }}</div>
                        </div>
                        <div class="item-col fixed item-col-actions-dropdown">
                            <div class="item-actions-dropdown">
                                <a class="item-actions-toggle-btn"> <span class="inactive">
									<i class="fa fa-cog"></i>
								</span> <span class="active">
								<i class="fa fa-chevron-circle-right"></i>
								</span> </a>
                                <div class="item-actions-block">
                                    <ul class="item-actions-list">
                                        <li>
                                            <a class="remove" href="{{ route('post.destroy', ['']) }}" data-toggle="modal" data-target="#confirm-modal">
                                                <i class="fa fa-trash-o "></i> </a>
                                        </li>
                                        <li>
                                            <a class="edit" href="item-editor.html"> <i class="fa fa-pencil"></i> </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
        <nav class="text-xs-right">
            {{ $posts->links() }}
        </nav>
    </article>
@endsection

@section('footerJs')
    <script src="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.js"></script>
    <script src="https://cdn.jsdelivr.net/highlight.js/latest/highlight.min.js"></script>
    <script>
        new SimpleMDE({
            element: document.getElementById("content"),
            renderingConfig: {
                codeSyntaxHighlighting: true
            },
            tabSize: 4,
            autosave: {
                enabled: true,
                uniqueId: 'junjun'
            },
//            status: ["autosave", "lines", "words", "cursor"],
        });
    </script>
@endsection