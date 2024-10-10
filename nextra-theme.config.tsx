import ContactForm from "@/components/ContactForm";
import CurvedBox from "@/components/CurvedBox";

const config = {
  logo: <span>SpencerRohan.com</span>,
  project: {
    link: "https://github.com/SpencerRohan",
  },
  navigation: {
    prev: false,
    next: false,
  },
  feedback: {
    content: null,
  },
  editLink: {
    component: null,
  },
  // darkMode: false,
  // themeSwitch: {
  //   useOptions() {
  //     return {
  //       dark: "Dark",
  //     };
  //   },
  // },
  footer: {
    component: (
      <div className="bg-brand-vanilla w-full">
        <div
          style={{ colorScheme: "light" }}
          className="bg-brand-vanilla bg-eames bg-repeat flex justify-center bg-opacity-50 text-black"
        >
          <div className="w-full md:w-1/2 px-5 pt-20 rounded-xl" id="contact">
            <CurvedBox className="bg-white w-full mb-16">
              <h2 className="text-t2 mb-8 font-bold text-center">
                Houston... We Have A Contact Form
              </h2>
              <ContactForm />
            </CurvedBox>
          </div>
        </div>
      </div>
    ),
  },
};

export default config;
