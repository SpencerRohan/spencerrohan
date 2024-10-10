import nextra from "nextra";

/** @type {import('next').NextConfig} */
const nextConfig = {
  webpack: (config) => {
    config.module.rules.push({
      test: /\.(woff|woff2|eot|ttf|otf)$/,
      type: "asset/resource",
      generator: {
        filename: "static/fonts/[hash][ext]",
      },
    });
    return config;
  },
};

const withNextra = nextra({
  theme: "nextra-theme-docs",
  themeConfig: "./nextra-theme.config.tsx",
});

export default withNextra(nextConfig);
