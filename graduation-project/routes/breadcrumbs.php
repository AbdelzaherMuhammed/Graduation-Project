<?php // routes/breadcrumbs.php


// Home
Breadcrumbs::for('home', function ($trail) {
    $trail->push('Home', route('dashboard.home'));
});

// Home > users
Breadcrumbs::for('users', function ($trail) {
    $trail->parent('home');
    $trail->push('Users', route('dashboard.users.index'));
});
// Home > users > create
Breadcrumbs::for('users.create', function ($trail) {
    $trail->parent('users');
    $trail->push('Add User', route('dashboard.users.create'));
});
// Home > users > edit
Breadcrumbs::for('users.edit', function ($trail, $user) {
    $trail->parent('users');
    $trail->push('Edit User ' . $user->name , route('dashboard.users.edit', $user->id));
});

// Home > articles
Breadcrumbs::for('articles', function ($trail) {
    $trail->parent('home');
    $trail->push('Articles', route('dashboard.articles.index'));
});
// Home > articles > create
Breadcrumbs::for('articles.create', function ($trail) {
    $trail->parent('articles');
    $trail->push('Add Article', route('dashboard.articles.create'));
});
// Home > articles > edit
Breadcrumbs::for('articles.edit', function ($trail, $article) {
    $trail->parent('articles');
    $trail->push('Edit Article ' . $article->name , route('dashboard.articles.edit', $article->id));
});

// Home > labs
Breadcrumbs::for('labs', function ($trail) {
    $trail->parent('home');
    $trail->push('Labs', route('dashboard.labs.index'));
});
// Home > labs > create
Breadcrumbs::for('labs.create', function ($trail) {
    $trail->parent('labs');
    $trail->push('Add Lab', route('dashboard.labs.create'));
});
// Home > labs > edit
Breadcrumbs::for('labs.edit', function ($trail, $lab) {
    $trail->parent('labs');
    $trail->push('Edit Lab ' . $lab->name , route('dashboard.labs.edit', $lab->id));
});

// Home > sponsors
Breadcrumbs::for('sponsors', function ($trail) {
    $trail->parent('home');
    $trail->push('Sponsors', route('dashboard.sponsors.index'));
});
// Home > sponsors > create
Breadcrumbs::for('sponsors.create', function ($trail) {
    $trail->parent('sponsors');
    $trail->push('Add Sponsor', route('dashboard.sponsors.create'));
});
// Home > sponsors > edit
Breadcrumbs::for('sponsors.edit', function ($trail, $sponsor) {
    $trail->parent('sponsors');
    $trail->push('Edit Sponsor ' . $sponsor->name , route('dashboard.sponsors.edit', $sponsor->id));
});

// Home > tools
Breadcrumbs::for('tools', function ($trail) {
    $trail->parent('home');
    $trail->push('Tools', route('dashboard.tools.index'));
});
// Home > tools > create
Breadcrumbs::for('tools.create', function ($trail) {
    $trail->parent('tools');
    $trail->push('Add Tool', route('dashboard.tools.create'));
});
// Home > tools > edit
Breadcrumbs::for('tools.edit', function ($trail, $tool) {
    $trail->parent('tools');
    $trail->push('Edit Tools ' . $tool->name , route('dashboard.sponsors.edit', $tool->id));
});

// Home > tutorials
Breadcrumbs::for('tutorials', function ($trail) {
    $trail->parent('home');
    $trail->push('Tutorials', route('dashboard.tutorials.index'));
});
// Home > tutorials > create
Breadcrumbs::for('tutorials.create', function ($trail) {
    $trail->parent('tutorials');
    $trail->push('Add Tool', route('dashboard.tutorials.create'));
});
// Home > tutorials > edit
Breadcrumbs::for('tutorials.edit', function ($trail, $tutorial) {
    $trail->parent('tutorials');
    $trail->push('Edit Tutorial ' . $tutorial->name , route('dashboard.sponsors.edit', $tutorial->id));
});

// Home > questions
Breadcrumbs::for('questions', function ($trail) {
    $trail->parent('home');
    $trail->push('Question', route('dashboard.questions.index'));
});
// Home > questions > create
Breadcrumbs::for('questions.create', function ($trail) {
    $trail->parent('questions');
    $trail->push('Add Question', route('dashboard.questions.create'));
});
// Home > questions > edit
Breadcrumbs::for('questions.edit', function ($trail, $question) {
    $trail->parent('questions');
    $trail->push('Edit Question ' .  $question->name , route('dashboard.questions.edit', $question->id));
});

// Home > tests
Breadcrumbs::for('tests', function ($trail) {
    $trail->parent('home');
    $trail->push('Tests', route('dashboard.tests.index'));
});
// Home > tests > create
Breadcrumbs::for('tests.create', function ($trail) {
    $trail->parent('tests');
    $trail->push('Add Test', route('dashboard.tests.create'));
});


