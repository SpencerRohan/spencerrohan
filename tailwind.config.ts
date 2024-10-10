import type { Config } from "tailwindcss";
import { fontFamily } from "tailwindcss/defaultTheme";

const config: Config = {
  content: [
    "./src/pages/**/*.{js,ts,jsx,tsx,mdx}",
    "./src/components/**/*.{js,ts,jsx,tsx,mdx}",
    "./src/app/**/*.{js,ts,jsx,tsx,mdx}",
  ],
  theme: {
    screens: {
      xs: "320px",
      sm: "481px",
      md: "769px",
      lg: "1025px",
    },
    borderRadius: {
      none: "0",
      xs: "2px",
      sm: "4px",
      md: "8px",
      lg: "16px",
      xl: "20px",
      round: "50px",
      circle: "9999px",
    },
    colors: {
      currentColor: "currentColor",
      inherit: "inherit",
      transparent: "transparent",
      black: "#000000",
      white: "#FFFFFF",
      brand: {
        vanilla: "#f9ecdc",
      },
    },
    fontSize: {
      "t1-lg": ["3.625rem", "1.2"], // [58px, 70px]
      "t1-md": ["3rem", "1.2"], // [48px, 57px]
      t1: ["2.375rem", "1.2"], // [38px, 45px]
      t2: ["2.25rem", "1.2"], // [36px, 43px]
      t3: ["1.75rem", "1.2"], // [28px, 33px]
      t4: ["1.25rem", "1.5"], // [20px, 30px]
      t5: ["1.125rem", "1.5"], // [18px, 27px]
      t6: ["1rem", "1.5"], // [16px, 24px]
      body: ["1rem", "1.5"], // [16px, 24px]
      "body-sm": [".875rem", "1.5"], // [14px, 21px]
      link: ["1rem", "1.5"], // [16px, 24px]
    },
    extend: {
      backgroundImage: {
        "gradient-radial": "radial-gradient(var(--tw-gradient-stops))",
        "gradient-conic":
          "conic-gradient(from 180deg at 50% 50%, var(--tw-gradient-stops))",
        paper: "url('/backgrounds/paper.png')",
        eames: "url('/backgrounds/eames.png')",
        halftone:
          "url('https://www.transparenttextures.com/patterns/skewed-print.png')",
      },
      fontFamily: {
        roboto: ["var(--font-roboto)", ...fontFamily.sans],
        raleway: ["var(--font-raleway)", ...fontFamily.serif],
        ar: ["var(--font-ar)", "var(--font-raleway)", ...fontFamily.serif],
        gi: ["var(--font-gi)", "var(--font-ar)", ...fontFamily.serif],
      },
      boxShadow: {
        "matte-inset":
          "rgba(50, 50, 93, 0.25) 0px 30px 60px -12px inset, rgba(0, 0, 0, 0.3) 0px 18px 36px -18px inset",
      },
    },
  },
  plugins: [],
};
export default config;
