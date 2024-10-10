import { Metadata } from "next";

export const HOME_META: Metadata = {
  title:
    "Spencer Rohan - Senior Software Engineer | Full-Stack & Accessibility",
  description:
    "Hey! I’m Spencer Rohan, a Chicago-based Senior Software Engineer with over 8 years of experience building fast, sleek, and user-friendly websites. From upgrading legacy systems to creating fresh designs with React and Next.js, I’m all about delivering the best digital experiences. Check out my work and let’s create something awesome together!",
  metadataBase: new URL("https://spencerrohan.com"),
  icons: {
    icon: [
      { url: "/favicon/favicon-16x16.png", sizes: "16x16", type: "image/png" },
      { url: "/favicon/favicon-32x32.png", sizes: "32x32", type: "image/png" },
      {
        url: "/favicon/android-chrome-192x192.png",
        sizes: "192x192",
        type: "image/png",
      },
      {
        url: "/favicon/android-chrome-512x512.png",
        sizes: "512x512",
        type: "image/png",
      },
    ],
    apple: [
      {
        url: "/favicon/apple-touch-icon.png",
        sizes: "180x180",
        type: "image/png",
      },
    ],
    other: [
      {
        rel: "mask-icon",
        url: "/favicon/safari-pinned-tab.jpeg",
        color: "#ff4f00",
      },
    ],
  },
  manifest: "/favicon/site.webmanifest",
  keywords: [
    "Spencer Rohan",
    "Senior Software Engineer",
    "Full-Stack Developer",
    "Chicago",
    "React",
    "Next.js",
    "Node.js",
    "Tailwind CSS",
    "GraphQL",
    "PostgreSQL",
    "Web Accessibility",
    "WCAG",
    "JavaScript",
    "CSS",
    "Tailwind",
    "Typescript",
    "SASS",
    "LESS",
    "Freelance Developer",
    "Scalable Web Solutions",
  ],
  openGraph: {
    title:
      "Spencer Rohan - Senior Software Engineer | Full-Stack & Accessibility",
    description:
      "Hey! I’m Spencer Rohan, a Chicago-based Senior Software Engineer with over 8 years of experience building fast, sleek, and user-friendly websites. From upgrading legacy systems to creating fresh designs with React and Next.js, I’m all about delivering the best digital experiences. Check out my work and let’s create something awesome together!",
    url: "https://spencerrohan.com",
    images: [
      {
        url: "/path-to-your-image.jpg", // Replace with your image path
        width: 800,
        height: 600,
        alt: "Spencer Rohan - Senior Software Engineer | Full-Stack & Accessibility",
      },
    ],
    type: "website",
  },
  twitter: {
    card: "summary_large_image",
    title:
      "Spencer Rohan - Senior Software Engineer | Full-Stack & Accessibility",
    description:
      "Hey! I’m Spencer Rohan, a Chicago-based Senior Software Engineer with over 8 years of experience building fast, sleek, and user-friendly websites. From upgrading legacy systems to creating fresh designs with React and Next.js, I’m all about delivering the best digital experiences. Check out my work and let’s create something awesome together!",
    images: ["/path-to-your-image.jpg"],
  },
};
