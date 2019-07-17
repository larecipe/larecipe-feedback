<h6 align="center">
    <img src="https://larecipe.binarytorch.com.my/images/logo.svg"/>
</h6>

<h2 align="center">
    LaRecipe Feedback
</h2>


<h6 align="center">
    Get feedback from your users about your documentations.
</h6>

# LaRecipe 🍪

**LaRecipe** is simply a code-driven package provides an easy way to create beautiful documentation for your product or application inside your Laravel app.

![LaRecipe Screenshot](https://larecipe.binarytorch.com.my/images/packages/feedback.png)

## Getting Started

1. Install the package via composer.

```bash
composer require binarytorch/larecipe-feedback
```

2. Run the migration

```bash
php artisan migrate
```

3. Use the VueJs component provided by the package at the end of each `.md` file you want to receive feedback about.

```html
<larecipe-feedback></larecipe-feedback>
```

<h6 align="center">
    <img src="https://larecipe.binarytorch.com.my/images/packages/feedback.gif"/>
</h6>

4. You can customize the component via the available props:

> The `document` prop is just an identified to let you see the feedback results about specific page, if the value is not provided the package will take the url location's path.

```html
<larecipe-feedback
    document="document id"
    title="the title of the feedback"
    message="the response message"
    ></larecipe-feedback>
```

> Note: this package doesn't come with Admin dashboard, you can setup that by yourself or see the results directly from the DB.

#### See [full documentation](https://larecipe.binarytorch.com.my/docs)

## License

This library is licensed under the MIT License - see the [LICENSE.md](LICENSE) file for details.
