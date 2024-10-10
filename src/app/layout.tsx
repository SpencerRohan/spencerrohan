import Header from "@/components/Header";
import { FONT_AR, FONT_GI, FONT_RALEWAY, FONT_ROBOTO } from "@/constants/fonts";
import { HOME_META } from "@/constants/meta";
import type { Viewport } from "next";
import { Metadata } from "next";
import "../styles/globals.css";
import Providers from "./providers";

export const metadata: Metadata = HOME_META;
export const viewport: Viewport = {
  themeColor: "#ff4f00",
};

export default function RootLayout({
  children,
}: Readonly<{
  children: React.ReactNode;
}>) {
  return (
    <html
      lang="en"
      className={`p-4 h-full overflow-hidden bg-brand-vanilla bg-halftone ${FONT_AR.variable} ${FONT_ROBOTO.variable} ${FONT_GI.variable} ${FONT_RALEWAY.variable}  min-w-[320px]`}
    >
      <body className="h-full overflow-y-scroll rounded-tl-[40px] md:rounded-tl-[120px] rounded-br-[40px] md:rounded-br-[120px] rounded-bl-lg rounded-tr-lg bg-paper bg-brand-vanilla border-solid border font-roboto">
        <Header />
        <main className="relative h-full min-w-[300px]">
          <Providers>{children}</Providers>
        </main>
      </body>
    </html>
  );
}
