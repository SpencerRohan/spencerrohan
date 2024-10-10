import { FONT_AR, FONT_RALEWAY, FONT_ROBOTO } from "@/constants/fonts";
import { HOME_META } from "@/constants/meta";
import { Metadata } from "next";
import type { AppProps } from "next/app";
import "../styles/nextra.css";

export const metadata: Metadata = HOME_META;

export default function MyApp({ Component, pageProps }: AppProps) {
  return (
    <>
      <style jsx global>{`
        :root {
          --font-ar: ${FONT_AR.style.fontFamily};
          --font-roboto: ${FONT_ROBOTO.style.fontFamily};
          --font-raleway: ${FONT_RALEWAY.style.fontFamily};
        }
      `}</style>
      <Component {...pageProps} />
    </>
  );
}
