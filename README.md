# Nautilus

![Nautilus - A WordPress block theme.](https://github.com/ndiego/nautilus/blob/main/_github/nautilus-github-banner.png)

Nautilus is the block theme that powers [nickdiego.com](nickdiego.com). I created this for my personal use and to experiment with new WordPress functionality. As a result, it's highly experimental, so please use with caution.

[Explore Nautilus in Playground](https://playground.wordpress.net/?gh-ensure-auth=yes&ghexport-repo-url=https%3A%2F%2Fgithub.com%2Fndiego%2Fnautilus&ghexport-content-type=theme&ghexport-theme=nautilus&ghexport-commit-message=Nautilus+update&ghexport-playground-root=/wordpress/wp-content/themes/nautilus&ghexport-pr-action=create&ghexport-allow-include-zip=no&blueprint-url=https%3A%2F%2Fraw.githubusercontent.com%2Fndiego%2Fnautilus%2Fmain%2F_playground%2Fblueprint.json)

## Requirements

- WordPress 6.5+

## Plugin Dependencies

- [Icon Block](https://wordpress.org/plugins/icon-block/)
- [Social Sharing Block](https://wordpress.org/plugins/social-sharing-block/)

## Development

There is no JavaScript build process in this theme, but it does use [`sass`](https://sass-lang.com/). Use the following `npm` commands to build the per-block stylesheets and the main `style.css` file.

| Scripts | Description | 
|-|-|
| `start-sass` | Watch changes to all `sass` files and generates the uncompressed `css`. |
| `build-sass` | Builds all per-block stylesheets and compresses them. |
| `theme-zip` | Uses composer to zip the theme (minus unneeded files) and places it in the `_playground` folder. |
