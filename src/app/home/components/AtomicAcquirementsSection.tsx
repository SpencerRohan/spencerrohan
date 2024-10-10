import AstroCanvas from "@/components/AstroCanvas";
import SkillGrid from "@/components/SkillGrid";
import {
  PRIMARY_SKILLS,
  SECONDARY_SKILLS,
} from "@/components/SkillGrid/constants";
import Image from "next/image";

const AtomicAcquirements = () => {
  return (
    <section className="w-full bg-[#14242e] relative text-center">
      <Image
        src="/imgs/top-rip.png"
        className="w-full -translate-y-[99%] absolute"
        alt=""
        width={3000}
        height={423}
      />

      <h2 className="text-t2 md:text-t2-md lg:text-t2-lg font-bold text-white pt-20">
        Atomic Acquirements
      </h2>

      <div className="relative h-[450px] max-h-full w-full" aria-hidden="true">
        <AstroCanvas />
      </div>
      <div className="md:absolute flex justify-center md:top-[25%] md:left-[3%] lg:left-[15.5%] -mt-20 md:mt-0">
        <SkillGrid iconSet={PRIMARY_SKILLS} />
      </div>
      <div className="md:absolute flex justify-center md:top-[25%] md:right-[3%] lg:right-[15.5%] pb-20 md:pb-0">
        <SkillGrid iconSet={SECONDARY_SKILLS} />
      </div>
      <Image
        src="/imgs/bottom-rip.png"
        className="w-full -translate-y-[1%] absolute"
        alt=""
        width={3000}
        height={423}
      />
    </section>
  );
};

export default AtomicAcquirements;
