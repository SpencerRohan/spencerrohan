import CurvedBox from "@/components/CurvedBox";
import dynamic from "next/dynamic";
import AtomicAcquirements from "./home/components/AtomicAcquirementsSection";
import IntroSection from "./home/components/IntroSection";

const ContactForm = dynamic(() => import("@/components/ContactForm"), {
  ssr: false,
});

const Home = () => {
  return (
    <>
      <IntroSection />
      <AtomicAcquirements />
      <div className="bg-brand-vanilla bg-eames bg-repeat pt-[200px] w-full flex flex-col gap-y-20 items-center bg-opacity-50">
        <div className="w-full md:w-1/2 p-5 rounded-xl">
          <CurvedBox className="bg-white w-full h-full mb-32">
            <h2 className="text-t2 mb-8 font-bold text-center">
              Houston... We Have A Contact Form
            </h2>
            <ContactForm />
          </CurvedBox>
        </div>
      </div>
    </>
  );
};

export default Home;
