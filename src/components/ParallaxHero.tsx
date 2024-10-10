"use client";

import Image from "next/image";
import React from "react";
import { ParallaxBanner } from "react-scroll-parallax";

type ParallaxProps = {};

const ParallaxHero: React.FC<ParallaxProps> = () => {
  return (
    <div className="w-full relative">
      <div className="absolute bottom-0 w-full flex justify-center px-6">
        <ParallaxBanner
          layers={[
            {
              image: "/imgs/hero/background.png",
              speed: 25,
            },
          ]}
          className="aspect-[2/1] max-h-[125px] sm:max-h-[300px] rounded-t-sm bg-gradient-to-b from-transparent to-[#605A50]"
        />
      </div>
      <div className="absolute bottom-0 left-0 right-0 flex items-center justify-center">
        <Image
          src="/imgs/hero/foreground.png"
          alt="Foreground"
          width={1080}
          height={350}
          className="max-h-[350px] h-auto w-auto"
        />
      </div>
    </div>
  );
};

export default ParallaxHero;
