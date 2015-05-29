var publicAssets = "./web/app/themes/wtysl/public/assets";
var sourceFiles = "./web/app/themes/wtysl/assets";

module.exports = {
  publicAssets: publicAssets,
  sass: {
    src: sourceFiles + "/stylesheets/**/*.{sass,scss}",
    dest: publicAssets + "/stylesheets",
    settings: {
      imagePath: "/assets/images" // Used by the image-url helper
    }
  },
  images: {
    src: sourceFiles + "/images/**",
    dest: publicAssets + "/images"
  },
  browserify: {
    bundleConfigs: [{
      entries: sourceFiles + "/javascripts/application.js",
      dest: publicAssets + "/javascripts",
      outputName: "application.js",
      extensions: [".js"]
    }]
  }
};