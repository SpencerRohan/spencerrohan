"use client";

import ChunkyButton from "@/components/ChunkyButton";
import CornerTapedCard from "@/components/CornerTapedCard";
import ParallaxHero from "@/components/ParallaxHero";
import Image from "next/image";
import { BsPostcardHeartFill } from "react-icons/bs";

const IntroSection = () => {
  return (
    <section className="flex flex-col items-center justify-center w-full p-8 md:p-24 mb-32">
      <div className="w-full">
        <h1 className="text-t1 md:text-t1-md lg:text-t1-lg mb-8 text-center">
          Spencer Rohan
        </h1>
        <div className="mb-16">
          <div className="w-full hidden md:flex sm:h-[350px] justify-end">
            <ParallaxHero />
          </div>
          <div className="w-full md:hidden ">
            <Image
              src="/imgs/hero/hero.png"
              alt="Foreground"
              width={1080}
              height={350}
            />
          </div>
        </div>
        <section>
          <h2 className="text-t2 font-bold text-center mb-8">
            A Digital Portfolio & Sandbox
          </h2>
          <div className="flex gap-x-8 gap-y-12 flex-col md:flex-row">
            <div className="w-full md:w-1/2 flex gap-4 flex-col">
              <p>
                I'm a filmworker turned friendly neighborhood web-slinger,
                passionate about accessibility and building awesome stuff for
                the net! Whether it's web development, accessibility, or film,
                I'm always up for a chat. And if you've come for a
                Highlander-style retro arcade showdown{" "}
                <b>--there can be only one!</b>
              </p>
              <div>
                <ChunkyButton href="#contact">
                  <BsPostcardHeartFill size={30} className="p-1" />
                  <span>Reach Out!</span>
                </ChunkyButton>
              </div>
            </div>
            <div className="w-full md:w-1/2 relative flex items-center justify-center">
              <CornerTapedCard />
            </div>
          </div>
        </section>
      </div>
    </section>
  );
};

export default IntroSection;
