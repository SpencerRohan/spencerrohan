import { IoAccessibility } from "react-icons/io5";
import {
  SiContentful,
  SiCss3,
  SiCypress,
  SiD3Dotjs,
  SiDrupal,
  SiEslint,
  SiFigma,
  SiGoogleanalytics,
  SiGraphql,
  SiHtml5,
  SiJavascript,
  SiJest,
  SiLess,
  SiNextdotjs,
  SiNodedotjs,
  SiPhp,
  SiPostgresql,
  SiPrettier,
  SiPython,
  SiReact,
  SiSass,
  SiStorybook,
  SiTailwindcss,
  SiThreedotjs,
  SiTypescript,
  SiVite,
  SiWebpack,
} from "react-icons/si";

export const PRIMARY_SKILLS = {
  HTML: { name: "HTML", icon: SiHtml5 },
  CSS: { name: "CSS", icon: SiCss3 },
  JAVASCRIPT: { name: "Javascript", icon: SiJavascript },
  // Row 2
  REACT: { name: "React", icon: SiReact },
  NEXTJS: { name: "NextJS", icon: SiNextdotjs },
  TYPESCRIPT: { name: "Typescript", icon: SiTypescript },
  NODEJS: { name: "NodeJS", icon: SiNodedotjs },
  // Row 3
  TAILWIND: { name: "Tailwind", icon: SiTailwindcss },
  SASS: { name: "SCSS", icon: SiSass },
  LESS: { name: "LESS", icon: SiLess },
  // Row 4
  JEST: { name: "Jest", icon: SiJest },
  CYPRESS: { name: "Cypress", icon: SiCypress },
  ESLINT: { name: "EsLint", icon: SiEslint },
  PRETTIER: { name: "Prettier", icon: SiPrettier },
};

export const SECONDARY_SKILLS = {
  ACCESSIBILITY: { name: "Web Accessibility", icon: IoAccessibility },
  PHP: { name: "PHP", icon: SiPhp },
  PYTHON: { name: "Python", icon: SiPython },
  // Row 2
  GRAPHQL: { name: "GraphQL", icon: SiGraphql },
  POSTGRESQL: { name: "PostgreSQL", icon: SiPostgresql },
  WEBPACK: { name: "Webpack", icon: SiWebpack },
  VITE: { name: "Vite", icon: SiVite },
  // Row 3
  GOOGLE_ANALYTICS: { name: "Google Analytics", icon: SiGoogleanalytics },
  D3: { name: "D3", icon: SiD3Dotjs },
  THREEJS: { name: "ThreeJS", icon: SiThreedotjs },
  // Row 4
  STORYBOOK: { name: "Storybook", icon: SiStorybook },
  FIGMA: { name: "Figma", icon: SiFigma },
  DRUPAL: { name: "Drupal", icon: SiDrupal },
  CONTENTFUL: { name: "Contentful", icon: SiContentful },
};
