# Nautilus

![Nautilus - A WordPress Block Theme](https://user-images.githubusercontent.com/4832319/161444681-94fec962-ac81-453d-a08e-8b91e84c6586.png)

Nautilus is the block theme that powers [nickdiego.com](nickdiego.com). I created this for my personal use and to experiment with new WordPress functionality. As a result, it's highly experimental, so please use with caution.

[Edit Nautilus in Playground](https://playground.wordpress.net/?gh-ensure-auth=yes&ghexport-repo-url=https%3A%2F%2Fgithub.com%2Fndiego%2Fnautilus&ghexport-content-type=theme&ghexport-theme=nautilus&ghexport-commit-message=Nautilus+update&ghexport-playground-root=/wordpress/wp-content/themes/nautilus&ghexport-pr-action=create&ghexport-allow-include-zip=no&blueprint-url=https%3A%2F%2Fraw.githubusercontent.com%2Fndiego%2Fnautilus%2Fmain%2F_playground%2Fblueprint.json)

## Requirements

- WordPress 6.5+

## Plugin Dependencies

- [Icon Block](https://wordpress.org/plugins/icon-block/)
- [Social Sharing Block](https://wordpress.org/plugins/social-sharing-block/)

## Development

There is no build process in this theme, but it does use [`sass`](https://sass-lang.com/). Use the following commands to build the per-block stylesheets and the main `style.css` file.

```bash
sass --watch src/blocks:assets/blocks --no-source-map --style=compressed
```

```bash
sass --watch src/style.scss:style.css --no-source-map
```