import { Raleway, Roboto } from "next/font/google";
import localFont from "next/font/local";

export const FONT_AR = localFont({
  src: [
    {
      path: "../../public/fonts/ar/arblack-webfont.woff2",
      weight: "800",
      style: "normal",
    },
    {
      path: "../../public/fonts/ar/arbold-webfont.woff2",
      weight: "700",
      style: "normal",
    },
    {
      path: "../../public/fonts/ar/armedium-webfont.woff2",
      weight: "500",
      style: "normal",
    },
    {
      path: "../../public/fonts/ar/arbook-webfont.woff2",
      weight: "400", // 300 actual
      style: "normal",
    },
  ],
  variable: "--font-ar",
});

export const FONT_GI = localFont({
  src: [
    {
      path: "../../public/fonts/gi/gibold-webfont.woff2",
      weight: "700",
      style: "normal",
    },
    {
      path: "../../public/fonts/gi/gimedium-webfont.woff2",
      weight: "500",
      style: "normal",
    },
    {
      path: "../../public/fonts/gi/giregular-webfont.woff2",
      weight: "400",
      style: "normal",
    },
  ],
  variable: "--font-gi",
});

export const FONT_RALEWAY = Raleway({
  subsets: ["latin"],
  weight: ["400", "500", "700"],
  variable: "--font-raleway",
});

export const FONT_ROBOTO = Roboto({
  subsets: ["latin"],
  weight: ["400", "500", "700"],
  variable: "--font-roboto",
});
