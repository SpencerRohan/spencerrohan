"use client";

import { ReactNode, useEffect, useState } from "react";
import { ParallaxProvider } from "react-scroll-parallax";

type ProvidersProps = {
  children: ReactNode;
};

const Providers = ({ children }: ProvidersProps) => {
  const [scrollContainer, setScrollContainer] = useState<
    HTMLElement | undefined
  >();

  useEffect(() => {
    const container = document.querySelector("body") || undefined;
    setScrollContainer(container);
  }, []);

  return (
    <ParallaxProvider scrollContainer={scrollContainer}>
      {children}
    </ParallaxProvider>
  );
};

export default Providers;
